<?php

return [

    /*
    |--------------------------------------------------------------------------
    | アプリケーション名
    |--------------------------------------------------------------------------
    |
    | この値はアプリケーションの名前であり、フレームワークが通知や
    | 他のUI要素にアプリケーション名を表示する必要がある場合に使用されます。
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーション環境
    |--------------------------------------------------------------------------
    |
    | この値は、アプリケーションが現在実行されている「環境」を決定します。
    | これにより、アプリケーションが利用するさまざまなサービスの設定方法を
    | 決定することがあります。この値は ".env" ファイルに設定します。
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションデバッグモード
    |--------------------------------------------------------------------------
    |
    | アプリケーションがデバッグモードの場合、エラーが発生すると、
    | 詳細なエラーメッセージとスタックトレースが表示されます。
    | 無効にすると、シンプルで汎用的なエラーページが表示されます。
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションURL
    |--------------------------------------------------------------------------
    |
    | このURLは、Artisanコマンドラインツールを使用する際にURLを
    | 正しく生成するためにコンソールで使用されます。アプリケーションの
    | ルートに設定し、Artisanコマンド内で使用できるようにします。
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションタイムゾーン
    |--------------------------------------------------------------------------
    |
    | ここではアプリケーションのデフォルトタイムゾーンを指定します。
    | このタイムゾーンはPHPのdateおよびdate-time関数群によって使用されます。
    | デフォルトでは「UTC」に設定されていますが、これは多くのケースで適しているためです。
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションロケール設定
    |--------------------------------------------------------------------------
    |
    | アプリケーションロケールは、Laravelの翻訳／ローカリゼーションメソッドが
    | 使用するデフォルトロケールを決定します。このオプションは、
    | 翻訳文字列を持つ予定の任意のロケールに設定できます。
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | 暗号化キー
    |--------------------------------------------------------------------------
    |
    | このキーはLaravelの暗号化サービスによって使用され、すべての暗号化された
    | 値が安全であることを確実にするために、ランダムな32文字の文字列に設定する
    | 必要があります。アプリケーションをデプロイする前にこの設定を行うべきです。
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | メンテナンスモードドライバー
    |--------------------------------------------------------------------------
    |
    | これらの設定オプションは、Laravelの「メンテナンスモード」ステータスを
    | 決定および管理するために使用されるドライバーを決定します。
    | 「cache」ドライバーを使用すると、複数のマシン間でメンテナンスモードを管理できます。
    |
    | サポートされているドライバー: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
