<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $payment_obj;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payment_obj)
    {
        //
        $this->payment_obj = $payment_obj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.payment_mail')
                    ->with(['payment_obj' => $this->payment_obj]);
    }
}
