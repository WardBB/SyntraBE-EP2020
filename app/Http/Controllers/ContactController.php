<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        // Validate the variables in the request
        $validate = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'question' => 'required'
        ]);

        // Build the mail by using the mails.contact blade and send it
        Mail::send('mails.contact', $validate, function ($message) {
            $message->to(request('email'), request('name'));
            $message->bcc('contact@festifavs.com', 'FestifavsAdmin');
            $message->subject('Message from: '. request('name'));
        });

        // Returns view contact.thanks if the mail has succesfully been send
        return view('contact.thanks');
    }
}

