<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\activateAccount' => [
            'App\Listeners\sendActivationEmail',
        ],
        'App\Events\OrderExist' => [
            'App\Listeners\SendOrderEmail',
            'App\Listeners\SendOrderSms'
            
            
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
