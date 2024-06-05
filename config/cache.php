<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトキャッシュストア
    |--------------------------------------------------------------------------
    |
    | このオプションは、フレームワークが使用するデフォルトのキャッシュストアを制御します。
    | このコネクションは、アプリケーション内でキャッシュ操作を実行する際に
    | 別のものが明示的に指定されていない場合に利用されます。
    |
    */

    'default' => env('CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | キャッシュストア
    |--------------------------------------------------------------------------
    |
    | ここでは、アプリケーションのすべてのキャッシュ"stores"とそのドライバーを定義できます。
    | キャッシュに保存するアイテムの種類をグループ化するために、同じキャッシュドライバーに
    | 対して複数のストアを定義することもできます。
    |
    | サポートされているドライバー: "array", "database", "file", "memcached",
    |                         　"redis", "dynamodb", "octane", "null"
    |
    */

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'connection' => env('DB_CACHE_CONNECTION'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | キャッシュキーのプレフィックス
    |--------------------------------------------------------------------------
    |
    | APC、データベース、memcached、Redis、及びDynamoDBキャッシュストアを利用する場合、同じ
    | キャッシュを使用する他のアプリケーションが存在する可能性があります。そのため、衝突を
    | 避けるために、すべてのキャッシュキーにプレフィックスを付けることができます。
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'),

];
