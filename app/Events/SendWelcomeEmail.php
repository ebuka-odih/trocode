<?php

namespace App\Events;

use App\Events\RegisteredEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegisteredEvent  $event
     * @return void
     */
    public function handle(RegisteredEvent $event)
    {
//        Mail::to($event->user)->send(new WelcomeEmail());
    }
}
