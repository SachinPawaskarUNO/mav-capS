<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvestmentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $boapp;
    public $loan;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $boapp, $loan, $amount)
    {
        $this->user = $user;
        $this->boapp = $boapp;
        $this->loan = $loan;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.investmentNotification');
    }
}
