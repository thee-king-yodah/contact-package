<?php

namespace Namu\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Namu\Contact\Mail\ContactMailable;
use Namu\Contact\Models\Contact;

class ContactController extends Controller
{


    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Contact::create($request->all());

        #send email

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
    }
}
