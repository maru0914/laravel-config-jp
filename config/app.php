<?php

return [

    /*
    |--------------------------------------------------------------------------
    | アプリケーション名
    |--------------------------------------------------------------------------
    |
    | この値はアプリケーションの名前であり、フレームワークが通知にアプリケーションの名前を
    | 配置する必要がある時や、アプリケーションの名前を表示する必要がある他のUI要素で使用されます。
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーション環境
    |--------------------------------------------------------------------------
    |
    | この値は、アプリケーションが現在実行されている「環境」を決めます。
    | これは、アプリケーションが利用するさまざまなサービスの設定方法を決めることがあります。
    | ".env" ファイルにこれを設定してください。
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションデバッグモード
    |--------------------------------------------------------------------------
    |
    | アプリケーションがデバッグモードの時、アプリケーションで発生する全てのエラーについて、
    | スタックトレース付きの詳細なエラーメッセージが表示されます。
    | 無効になっている場合、シンプルで汎用的なエラーページが表示されます。
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションURL
    |--------------------------------------------------------------------------
    |
    | このURLは、Artisanコマンドラインツールを使用する際に、コンソールで正しいURLを生成する
    | ために使用されます。Artisanコマンド内で利用可能となるように、アプリケーションの
    | ルートURLをこれに設定するべきです。
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションタイムゾーン
    |--------------------------------------------------------------------------
    |
    | ここではアプリケーションのデフォルトタイムゾーンを指定でき、この値はPHPの
    | 日付及び日時関連の関数で使用されます。ほとんどのユースケースで適しているので、
    | タイムゾーンはデフォルトで「UTC」に設定されています。
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションロケール設定
    |--------------------------------------------------------------------------
    |
    | アプリケーションロケールは、Laravelの翻訳／ローカリゼーションメソッドが
    | 使用するデフォルトのロケールを決定します。このオプションは、翻訳文字列を用意する予定の
    | 任意のロケールに設定できます。
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
    | この"key"はLaravelの暗号化サービスによって使用されるもので、すべての暗号化された値が
    | 安全であることを確実にするために、ランダムな32文字の文字列が設定されているべきです。
    | アプリケーションをデプロイする前にこの設定を行うべきです。
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
    | これらの設定オプションは、Laravelの「メンテナンスモード」ステータスを決定及び管理する
    | ために使用されるドライバーを決めます。"cache"ドライバーは複数マシンにわたる
    | メンテナンスモードのコントロールを可能にします。
    |
    | サポートされているドライバー: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
