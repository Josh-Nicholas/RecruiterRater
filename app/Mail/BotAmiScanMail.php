<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BotAmiScanMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_obj;


    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($email_obj)
    {
        $this->email_obj = $email_obj;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('mail.email-temp')
                    ->with([ 'email_obj' => $this->email_obj ]);


    }
}
