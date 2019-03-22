<?php

namespace App\Listeners;

use App\Events\AddPoint;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncreasePointOfUser
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
     * @param  AddPoint  $event
     * @return void
     */
    public function handle(AddPoint $event)
    {
     // $user = Auth::user();
      $user = DB::table('users')->where('id', '=', $id)->increment('points');

    }
}
