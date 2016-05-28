<?php


namespace Whimsicals\Mailers;


class ContactUsMailer extends Mailer
{

    public function sendContactEmail($request)
    {
        $email = 'dallinis@hotmail.com';
        $view = 'emails.contact';

        $this->sendTo($email, $request['subject'], $view, $request);

    }

}