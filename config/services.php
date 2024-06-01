<?php

return [

    /*
    |--------------------------------------------------------------------------
    | サードパーティサービス
    |--------------------------------------------------------------------------
    |
    | このファイルは、Mailgun、Postmark、AWSなどのサードパーティサービスの
    | 認証情報を保存するためのものです。このファイルは、この種の情報の
    | 事実上の保存場所を提供し、パッケージがさまざまなサービスの認証情報を
    | 見つけるための慣習的なファイルを持つことを可能にします。
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
