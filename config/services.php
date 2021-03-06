<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '867852794016372',
        'client_secret' => '360ce6963fadc6c48d7ce4b05420a410',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '118406148983-qnqfa69t2dgpdvh4kan3gtu28m6tcem8.apps.googleusercontent.com',
        'client_secret' => 'K81jOE56m_yOQWAudIuoNmFn',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
];
