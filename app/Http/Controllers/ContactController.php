<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Whimsicals\Mailers\ContactUsMailer;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(ContactUsMailer $mailer, Request $request)
    {
        $mailer->sendContactEmail($request->all());

        return view('contact');
    }
}
