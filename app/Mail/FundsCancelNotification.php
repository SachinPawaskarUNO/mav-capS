<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Fund;

class FundsCancelNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $fund;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$fund)
    {
        //
        $this->user = $user;
        $this->fund = $fund;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.fundsCancelNotification');
    }
}
