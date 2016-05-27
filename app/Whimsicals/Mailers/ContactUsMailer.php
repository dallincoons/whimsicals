<?php


namespace Whimsicals\Mailers;


class ContactUsMailer extends Mailer
{

    public function sendContactEmail()
    {
        $email = 'dallinis@hotmail.com';
        $subject = 'You have a message';
        $view = 'emails.contact';

        $this->sendTo($email, $subject, $view);

    }

}