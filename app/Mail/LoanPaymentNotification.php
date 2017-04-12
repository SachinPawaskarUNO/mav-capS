<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoanPaymentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $loan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $loan)
    {
        $this->message = $message;
        $this->loan = $loan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.loanPaymentNotification');
    }
}
