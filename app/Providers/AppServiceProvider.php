<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
//use App\Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           Schema::defaultStringLength(191);
           $this->app['request']->server->set('HTTPS', true);
           $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');

    }
    /**
     * Register any application services.
     *
     * @return void
     */


}
