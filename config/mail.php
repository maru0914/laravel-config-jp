<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトメーラー
    |--------------------------------------------------------------------------
    |
    | このオプションは、メッセージを送信する際に他のメーラーが明示的に指定されていない限り、
    | 全てのEメールメッセージを送信するために使用されるデフォルトのメーラーを指定します。
    | 全ての追加のメーラーは"mailers"配列内で設定できます。各タイプのメーラーの例が
    | 提供されています。
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | メーラー設定
    |--------------------------------------------------------------------------
    |
    | ここでは、アプリケーションで使用されるすべてのメーラーとそれぞれの設定を構成できます。
    | いくつかの例が設定されており、必要に応じて独自のメーラーを追加できます。
    |
    | Laravelは、Eメールを配信する際に使用できるさまざまなメール"transport"ドライバーを
    | サポートしています。以下のメーラーについてどれを使用するかを指定できます。
    | 必要であれば追加のメーラーを追加することもできます。
    |
    | サポート: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |          "postmark", "resend", "log", "array",
    |          "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | グローバル "From" アドレス
    |--------------------------------------------------------------------------
    |
    | アプリケーションから送信されるすべてのEメールが同じアドレスから送信されるようにする
    | ことができます。ここでは、アプリケーションから送信されるすべてのEメールに
    | グローバルに使用される名前とアドレスを指定できます。
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

];
