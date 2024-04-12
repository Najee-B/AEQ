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
        
        Mail::to('info@aeqdefense.com')->send(new ContactForm($data));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        return redirect()->route('contact')->with('error', 'An error occurred while sending your message. Please try again later.');
    }
}

   
}
    

