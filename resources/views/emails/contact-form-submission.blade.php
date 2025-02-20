<x-mail::message>
    # New Contact Form Submission

    **Name:** {{ $name }}
    **Email:** {{ $email }}
    **Phone:** {{ $phone }}
    **Submitted:** {{ $submittedAt }}

    ## Message:
    {{ $message }}

    <x-mail::panel>
        This email was sent from the contact form on your website.
    </x-mail::panel>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
