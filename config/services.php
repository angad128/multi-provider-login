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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '2019400374966972',
        'client_secret' => '47f3e795503540ef706989d5838c1362',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'Au6QQigV8WvvNsIBDC6XEZj3C',
        'client_secret' => 'ZRnXLp0Z0S0N85TDngfe3aYWsqlszdudFYfpqGk1pHf5CkQuWt',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],
    'google' => [
        'client_id' => '234416891233-6h4a2cbm2d0sdbtla58slqtmcbsv774p.apps.googleusercontent.com',
        'client_secret' => 'lZTubY6EGd2OyA8ll12hnKaH',
        'redirect' => 'http://localhost:8000/auth/googe/callback',
    ],

];
