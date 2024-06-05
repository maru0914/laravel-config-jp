<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトファイルシステムディスク
    |--------------------------------------------------------------------------
    |
    | ここで、フレームワークが使用するべきデフォルトのファイルシステムディスクを指定できます。
    | "local"ディスク及びさまざまなクラウドベースのディスクがファイルストレージとして
    | アプリケーションで利用可能です。
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | ファイルシステムディスク
    |--------------------------------------------------------------------------
    |
    | 以下では、必要に応じて多くのファイルシステムディスクを設定でき、同じドライバーに対して
    | 複数のディスクを設定することも可能です。ここには、ほとんどのサポートされている
    | ストレージドライバーの例が参考のため設定されています。
    |
    | サポートされているドライバー: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | シンボリックリンク
    |--------------------------------------------------------------------------
    |
    | ここでは、`storage:link` Artisanコマンドが実行されたときに作成される、
    | シンボリックリンクについて設定できます。配列のキーはリンクの場所、
    | 値はそのターゲットである必要があります。
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
