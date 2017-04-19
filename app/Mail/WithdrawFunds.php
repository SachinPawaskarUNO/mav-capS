<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\WithdrawFund;

class WithdrawFunds extends Mailable
{
    use Queueable, SerializesModels;
      public $user;
      public $withdraw;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$withdraw)
    {
        $this->user = $user;
        $this->withdraw=$withdraw;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.WithdrawFunds');
    }
}
