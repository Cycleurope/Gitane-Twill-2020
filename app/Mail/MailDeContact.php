<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailDeContact extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $address;
    public $postalcode;
    public $city;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('maileclipse::templates.messageDeContact')
            ->from('web@cycles-gitane.fr', 'Nouveau message du site Gitane')
            ->subject('Message Subject')
            ->replyTo('noreply@cycles-gitane.fr');
    }
}
