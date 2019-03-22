<?php

namespace App\Listeners;

use App\Events\OrderExist;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\newOrder;
use App\Order;
class SendOrderEmail
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
     // \Mail::to($event->order->email)
               //->send(new newOrder($event->order));

      //Mail::to($event->user->phone)->send(new  newOrder($event->order));

  
    }
}
