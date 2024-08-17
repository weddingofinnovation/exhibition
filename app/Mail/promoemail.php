<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class promoemail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailmessage;
    public $subject;
    public $month;
    public $city;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $subject, $month, $city)
    {
        $this->subject = $subject;
        $this->mailmessage = $message;
        $this->month = $month;
        $this->city = $city;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->html('emails.promo');
    }
}
