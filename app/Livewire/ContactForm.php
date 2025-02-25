<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

class ContactForm extends Component
{
    public $name = '';
    public $country_code = '+1';
    public $phone_number = '';
    public $phone = '';
    public $email = '';
    public $message = '';
    public $username = '';
    public string $turnstileResponse = '';
    public $showSuccessMessage = false;
    public $loading = false;

    // Define rules as a method
    protected function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:100'],
            'phone_number' => ['nullable'],
            'email' => ['required', 'email:rfc,dns'],
            'message' => ['required', 'min:10', 'max:2000'],
            'turnstileResponse' => ['required', Rule::turnstile()],
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter your name.',
        'email.required' => 'Please enter a valid email address.',
        'message.required' => 'Please enter a message (10-2000 characters).',
        'turnstile.required' => 'Please complete the security verification.',
//        Turnstile::class => 'Security verification failed. Please try again.',
    ];

    public function updated($propertyName)
    {
        if ($propertyName !== 'turnstileResponse') {
            try {
                $this->validateOnly($propertyName);
            } catch (\Illuminate\Validation\ValidationException $e) {
                $this->dispatch('errorsOccurred');
                throw $e;
            }
        }
    }

    public function combinePhoneNumber()
    {
        if (empty($this->phone_number)) {
            $this->phone = '';
            return;
        }
        $this->phone = $this->country_code . ' ' . $this->phone_number;
    }

    public function save()
    {
        $this->loading = true;

        try {
            if (!empty($this->username)) {
                \Log::info('Bot submission detected via honeypot', [
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent()
                ]);
                $this->showSuccessMessage = true;
                $this->loading = false;
                return;
            }

            $this->validate();

            $this->combinePhoneNumber();

            $emailData = [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message
            ];

            Mail::to(config('mail.contact_form_recipient', 'contact@example.com'))
                ->send(new ContactFormSubmission($emailData));
            \Log::info('Mail sent successfully to logs');

            $this->showSuccessMessage = true;
            $this->turnstileResponse = '';
            $this->dispatch('scroll-to-contact');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('errorsOccurred');
            throw $e;
        } catch (\Exception $e) {
            session()->flash('error', 'Sorry, there was an error sending your message. Please try again later.');
            $this->dispatch('errorsOccurred');
            report($e);
        } finally {
            $this->loading = false;
        }
    }

    public function resetForm()
    {
        $this->reset([
            'name', 'country_code', 'phone_number', 'phone',
            'email', 'message', 'turnstileResponse', 'showSuccessMessage', 'username'
        ]);

        // Force turnstile to reset
        $this->dispatch('formReset');

        // Add a slight delay to ensure DOM is updated before rendering validation again
        usleep(100000); // 100ms delay
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
