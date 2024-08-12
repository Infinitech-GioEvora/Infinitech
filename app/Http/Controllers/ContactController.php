<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitinquiry(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string',
        ]);
    
        // Extract the validated data
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $phone = $validatedData['phone'] ?? 'N/A';
        $website = $validatedData['website'] ?? 'N/A';
        $message = $validatedData['message'];
    
        // Prepare email data
        $to = "giolo.evora@gmail.com";  // Your receiving email address
        $subject = "Inquiry from $name";  // Email subject
        $body = "Name: $name\nEmail: $email\nWebsite: $website\nPhone: $phone\nMessage:\n$message";  // Email body
    
        // Send the email
        Mail::raw($body, function($message) use ($email, $to, $subject) {
            $message->from($email)  // The sender's email address
                    ->to($to)      // The recipient's email address
                    ->subject($subject);  // The email subject
        });
    
        return response(['msg' => "Message sent successfully!"]);
    }
    
    
}
