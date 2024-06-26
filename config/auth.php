<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 認証デフォルト
    |--------------------------------------------------------------------------
    |
    | このオプションは、アプリケーションにおけるデフォルトの認証"guard"と、
    | パスワードリセット"broker"を定義します。必要に応じてこれらの値を変更できますが、
    | ほとんどのアプリケーションにとって完璧なスタートの設定になっています。
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | 認証ガード
    |--------------------------------------------------------------------------
    |
    | 次に、アプリケーションのすべての認証ガードを定義できます。もちろん、セッションストレージと
    | Eloquentユーザープロバイダーを利用する素晴らしいデフォルト設定が定義されています。
    |
    | すべての認証ガードはユーザープロバイダーを持ち、ユーザープロバイダーは、データベースや
    | アプリケーションで使用される他のストレージシステムから、ユーザーが実際にどのように
    | 取得されるかを定義します。通常、Eloquentが利用されます。
    |
    | サポート対象: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | ユーザープロバイダー
    |--------------------------------------------------------------------------
    |
    | すべての認証ガードはユーザープロバイダーを持ち、ユーザープロバイダーは、データベースや
    | アプリケーションで使用される他のストレージシステムから、ユーザーが実際にどのように
    | 取得されるかを定義します。通常、Eloquentが利用されます。
    |
    | 複数のユーザーテーブルまたはモデルがある場合は、モデル/テーブルに相当する複数の
    | プロバイダーを設定できます。これらのプロバイダーは、定義した追加の認証ガードに
    | 割り当てることができます。
    |
    | サポート: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | パスワードリセット
    |--------------------------------------------------------------------------
    |
    | これらの設定オプションは、Laravelのパスワードリセット機能の動作を指定します。これには、
    | トークンストレージに使用されるテーブルと、ユーザーを実際に取得するために呼び出される
    | ユーザープロバイダーが含まれます。
    |
    | 有効期限は、各リセットトークンが有効と見なされる分数です。このセキュリティ機能は
    | トークンを短期間のみ有効なものにし、推測される時間を短くします。
    | 必要に応じてこれを変更できます。
    |
    | スロットル設定は、ユーザーが追加のパスワードリセットトークンを生成する前に
    | 待機しなければならない秒数です。これは、ユーザーが非常に大量の
    | パスワードリセットトークンをすばやく生成することを防ぎます。
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | パスワード確認タイムアウト
    |--------------------------------------------------------------------------
    |
    | ここでは、パスワード確認ウィンドウの有効期限が切れ、ユーザーが確認画面で再度パスワードを
    | 入力するように求められるまでの秒数を定義できます。デフォルトでは、タイムアウトは
    | 3時間です。
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
