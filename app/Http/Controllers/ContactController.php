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

       $validate = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'question' => 'required'
        ]);

        Mail::send('mails.contact', $validate, function ($message) {
            $message->to(request('email'), request('name'));
            $message->bcc('contact@festifavs.com', 'FestifavsAdmin');
            $message->subject('Message from: '. request('name'));
        });


        return view('contact.thanks');
    }
}
