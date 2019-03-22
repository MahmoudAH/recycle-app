<?php

namespace App\Listeners;

use App\Events\OrderExist;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\RecievedOrder;
use Illuminate\Support\Facades\Auth;
use App\User;
class SendOrderSms
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
     * @param  OrderExist  $event
     * @return void
     */
    public function handle(OrderExist $event)
    {
        //$user = Auth::user();

    //    \Notification::send($event->user->phone, new RecievedOrder($user));
     
    }
}
