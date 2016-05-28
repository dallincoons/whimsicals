<?php namespace Whimsicals\Mailers;

use Illuminate\Mail\Mailer as Mail;

abstract class Mailer
{
    /**
     * @var Mail
     */
    private $mail;


    /**
     * Mailer constructor.
     */
    public function __construct(Mail $mail)
    {

        $this->mail = $mail;
    }

    public function sendTo($email, $subject, $view, $data = [])
    {
        $this->mail->queue($view, $data, function($message) use($email, $subject){
        

            $message->to($email)->subject($subject);

        });
    }
}