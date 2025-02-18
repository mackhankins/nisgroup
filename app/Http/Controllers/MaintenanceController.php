<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MaintenanceController extends Controller
{
    public function submitQuote(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'project_details' => 'required|string|max:5000',
        ]);

        // Send email
        Mail::raw("New Quote Request\n\n" .
            "Name: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Phone: {$validated['phone']}\n" .
            "Company: {$validated['company']}\n\n" .
            "Project Details:\n{$validated['project_details']}",
            function($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('New Quote Request from ' . $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            }
        );

        // Redirect back with success message
        return back()->with('success', 'Thank you for your quote request. We\'ll get back to you soon!');
    }
}
