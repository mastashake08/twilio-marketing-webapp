<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactsNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {
        //
        $contacts = \App\Models\Contact::all();
        $contacts->each(function ($contact) use($event) {
          $contact->notify(new \App\Notifications\GymNotification($event->message));
        });
    }
}
