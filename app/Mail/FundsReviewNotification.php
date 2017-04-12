<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FundsReviewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $fund;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $fund)
    {
        $this->message = $message;
        $this->fund = $fund;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.fundsReviewNotification');
    }
}
