<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewUserListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;
        $content = [
            'title' => 'New user named '. $user['name'] .' Registered',
            'body' => 'A new user with name '. $user['name'] .' and email: '. $user['email'] .' was registered.'
        ];

        \Mail::to('satishb753@gmail.com')->send(new \App\Mail\TestMail($content));
    }
}
