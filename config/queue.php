<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトキュー接続名
    |--------------------------------------------------------------------------
    |
    | Laravelのキューは単一の統一されたAPIを介して、さまざまなバックエンドを
    | サポートしており、各バックエンドに同一の構文を使用して便利にアクセスできます。
    | デフォルトのキュー接続は以下に定義されています。
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | キュー接続
    |--------------------------------------------------------------------------
    |
    | ここでは、アプリケーションで使用されるすべてのキューバックエンドの
    | 接続オプションを構成できます。Laravelがサポートする各バックエンドの
    | 例の構成が提供されています。必要に応じてさらに追加することも自由です。
    |
    | ドライバー: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | ジョブのバッチ処理
    |--------------------------------------------------------------------------
    |
    | 以下のオプションは、ジョブのバッチ処理情報を格納するデータベースと
    | テーブルを構成します。これらのオプションは、アプリケーションで定義された
    | 任意のデータベース接続とテーブルに更新できます。
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | 失敗したキュージョブ
    |--------------------------------------------------------------------------
    |
    | これらのオプションは、失敗したキュージョブのログ記録の動作を構成し、
    | 失敗したジョブがどのように、どこに保存されるかを制御できます。
    | Laravelには、失敗したジョブをシンプルなファイルまたはデータベースに
    | 保存するためのサポートが付属しています。
    |
    | サポートされているドライバー: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
