<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Http;

class ContactForm extends Component
{
    #[Rule('required|min:2|max:100', message: 'Please enter your name.')]
    public $name = '';

    #[Rule('nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', message: 'Please enter a valid phone number.')]
    public $phone = '';

    #[Rule('required|email:rfc,dns', message: 'Please enter a valid email address.')]
    public $email = '';

    #[Rule('required|min:10|max:2000', message: 'Please enter a message (10-2000 characters).')]
    public $message = '';

    // Not validating turnstile with attribute - we'll do it manually
    public $turnstile = '';

    public $showSuccessMessage = false;
    public $loading = false;
    public $turnstileError = '';

    public function updated($propertyName)
    {
        if ($propertyName !== 'turnstile') {
            try {
                $this->validateOnly($propertyName);
            } catch (\Illuminate\Validation\ValidationException $e) {
                $this->dispatch('errorsOccurred');
                throw $e;
            }
        }
    }

    public function save()
    {
        $this->loading = true;
        $this->turnstileError = '';

        try {
            // Validate form fields first
            $validatedData = $this->validate();

            // Manually validate Turnstile
            if (empty($this->turnstile)) {
                $this->turnstileError = 'Please complete the security verification.';
                $this->dispatch('errorsOccurred');
                return;
            }

            // Verify Turnstile response with Cloudflare
            $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret' => config('turnstile.secret_key', env('TURNSTILE_SECRET_KEY')),
                'response' => $this->turnstile,
                'remoteip' => request()->ip(),
            ]);

            if (!$response->successful() || !$response->json('success')) {
                $this->turnstileError = 'Security verification failed. Please try again.';
                $this->dispatch('errorsOccurred');
                return;
            }

            // All validation passed, continue with form submission
            $validatedData['phone'] = $this->phone; // Add phone since it's optional

            // Send email
            Mail::to(config('mail.contact_form_recipient', 'contact@example.com'))
                ->send(new ContactFormSubmission($validatedData));

            // Reset form
            $this->reset(['name', 'phone', 'email', 'message', 'turnstile', 'turnstileError']);
            $this->showSuccessMessage = true;

            // Reset success message after 5 seconds
            $this->dispatch('contact-form-success');

        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('scroll-to-contact');
            throw $e;
        } catch (\Exception $e) {
            session()->flash('error', 'Sorry, there was an error sending your message. Please try again later.');
            $this->dispatch('scroll-to-contact');
            report($e);
        } finally {
            $this->loading = false;
        }
    }

    public function resetSuccessMessage()
    {
        $this->showSuccessMessage = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
