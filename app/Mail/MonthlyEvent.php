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
    public $lname;
    public $lemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($selectedEventDetails, $lname, $lemail)
    {
        $this->selectedEventDetails = $selectedEventDetails;
        $this->lname = $lname;
        $this->lemail = $lemail;
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

        //return $this->subject('Upcoming events relevant to your Industry')->view('emails.monthlyevent');

        return $this->subject('Upcoming events relevant to your Industry')->with([
            'selectedEventDetails' => $this->selectedEventDetails,
            'lname' => $this->lname,
            'lemail' => $this->lemail,
        ])->view('emails.monthlyevent');;
    }
}
