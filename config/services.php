<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'nexmo' => [
    'key' => env('NEXMO_KEY'),
    'secret' => env('NEXMO_SECRET'),
    'sms_from' => '15556666666',
],

    'google' => [
        'client_id' =>env('GOOGLE_CLIENT_ID','994636059290-kfkhl2amru5t12qke806e3d9440uhg4t.apps.googleusercontent.com'),         
        'client_secret' =>env('GOOGLE_CLIENT_SECRET','xzoTHwA5xqXSgffQiazUc6VV'), 
        'redirect' => 'http://localhost:8000/login/google/callback',
],
      
    'facebook' => [
        'client_id' =>'448551102334375',         
        'client_secret' =>'1e9d807f253cac879fc95518218c0ff8', 
        'redirect' => 'http://localhost:8000/login/facebook/callback',
],

];
