<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_data;
    public function __construct($email_data){
        $this->email_data = $email_data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $address = 'noreply@trocode.io';
        $subject = 'Welcome to Trocode';
        $name = 'Trocode';

        return $this->markdown('emails.welcome')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
