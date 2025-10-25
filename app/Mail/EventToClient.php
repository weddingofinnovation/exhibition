<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventToClient extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $monthwise;
    public $event;
    public $user;
    public $customSubject;
    public $selectedEvents;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $user, Event $event,  $customSubject = null, $selectedEvents)
    {
        $this->user = $user;
        $this->event = $event;
        $this->customSubject = $customSubject;

        $this->selectedEvents = $selectedEvents;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->customSubject ?? 'Event Notification: ' . $this->event->eventname)->view('emails.eventtoclient');
    }
}
