<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\sendmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Mail;

class sendmailFired
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
     * @param  \App\Events\sendmail  $event
     * @return void
     */
    public function handle(sendmail $event)
    {
        $user = User::find($event->user_id)->toarray();
        Mail::send('eventMail',$user,function($message) use($user){
                  $message->to($user['email']);
                  $message->subject('Event Testing');
        });
    }
}

