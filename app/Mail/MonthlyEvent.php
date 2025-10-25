<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MonthlyEvent extends Mailable
{
    use Queueable, SerializesModels;

    public $selectedEventDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($selectedEventDetails)
    {
        $this->selectedEventDetails = $selectedEventDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // return $this->subject('Upcoming events relevant to your Industry')
        //     ->markdown('emails.monthlyevent');

        return $this->subject('Upcoming events relevant to your Industry')->view('emails.monthlyevent');
    }
}
