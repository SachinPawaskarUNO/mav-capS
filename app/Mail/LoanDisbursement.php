<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Loan;
use App\BusinessOwnerApplication;
use App\Disbursement;

class LoanDisbursement extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $loan;
    public $disbursement;
    public $boapp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $boapp, $loan, $disbursement)
    {
        //
        $this->user = $user;
        $this->loan = $loan;
        $this->boapp = $boapp;
        $this->disbursement = $disbursement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.LoanDisbursement');
    }
}
