<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

class ContactController extends Controller
{
    //

    

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    try {
        // Choose one of the following methods to send the email:

        // Option 1: Using Mail Facade (without mailable class)
        /*
        $message = Mail::send([], $data, function ($message) use ($data) {
            $message->to('recipient@example.com'); // Replace with your recipient email
            $message->subject('Contact Form Submission from ' . $data['name']);
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')); // Optional
            $message->setBody($this->buildEmailBody($data)); // Build email body with helper function
        });
        */

        // Option 2: Using Mailable Class (recommended)
        Mail::to('muhammednajeeb632@gmail.com')->send(new ContactForm($data));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        return redirect()->route('contact')->with('error', 'An error occurred while sending your message. Please try again later.');
    }
}

   
}
    

