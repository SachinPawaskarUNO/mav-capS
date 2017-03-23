<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Loan;

class LoanRejectNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $loan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $loan)
    {
        //
        $this->user = $user;
        $this->loan = $loan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.LoanRejectNotification');
    }
}
