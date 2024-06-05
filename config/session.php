<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトセッションドライバー
    |--------------------------------------------------------------------------
    |
    | このオプションは、受信リクエストに対して使用されるデフォルトの
    | セッションドライバーを決定します。Laravelはセッションデータを永続化するために
    | さまざまなストレージオプションをサポートしています。データベース
    | ストレージは優れたデフォルト選択です。
    |
    | サポートされているドライバー: "file", "cookie", "database", "apc",
    |                         "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | セッションの有効期間
    |--------------------------------------------------------------------------
    |
    | ここでは、セッションがアイドル状態のままで許可される時間を分単位で
    | 指定できます。ブラウザが閉じられたときにセッションをすぐに有効期限
    | 切れにしたい場合は、expire_on_close構成オプションを介してそれを示す
    | ことができます。
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | セッション暗号化
    |--------------------------------------------------------------------------
    |
    | このオプションを使用すると、すべてのセッションデータを保存する前に
    | 暗号化することを簡単に指定できます。すべての暗号化はLaravelによって
    | 自動的に実行され、通常どおりセッションを使用できます。
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | セッションファイルの場所
    |--------------------------------------------------------------------------
    |
    | "file"セッションドライバーを使用する場合、セッションファイルはディスクに
    | 配置されます。デフォルトの保存場所はここで定義されています。ただし、
    | 保存する別の場所を提供することもできます。
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | セッションデータベース接続
    |--------------------------------------------------------------------------
    |
    | "database"または"redis"セッションドライバーを使用する場合、これらの
    | セッションを管理するために使用される接続を指定できます。これは、
    | データベース構成オプションの接続に対応している必要があります。
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | セッションデータベーステーブル
    |--------------------------------------------------------------------------
    |
    | "database"セッションドライバーを使用する場合、セッションを保存するために
    | 使用されるテーブルを指定できます。もちろん、適切なデフォルトが
    | 定義されていますが、別のテーブルに変更することもできます。
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | セッションキャッシュストア
    |--------------------------------------------------------------------------
    |
    | フレームワークのキャッシュ駆動セッションバックエンドの1つを使用する場合、
    | リクエスト間でセッションデータを保存するために使用されるキャッシュストアを
    | 定義できます。これは、定義されたキャッシュストアの1つと一致する
    | 必要があります。
    |
    | 影響を受けるドライバー: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | セッション掃除抽選
    |--------------------------------------------------------------------------
    |
    | 一部のセッションドライバーは、ストレージから古いセッションを取り除くために
    | ストレージの場所を手動で掃除しなければいけません。この設定値は特定のリクエストでそれが
    | 発生する確率です。デフォルトでは、確率は100分の2です。
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | セッションCookie名
    |--------------------------------------------------------------------------
    |
    | ここでは、フレームワークによって作成されるセッションCookieの名前を
    | 変更できます。通常、この値を変更する必要はありません。変更しても
    | 意味のあるセキュリティ向上が得られるわけではないためです。
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | セッションCookieのパス
    |--------------------------------------------------------------------------
    |
    | セッションCookieパスは、Cookieが利用可能と見なされるパスを
    | 決定します。通常、これはアプリケーションのルートパスになりますが、
    | 必要に応じてこれを変更することもできます。
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | セッションCookieドメイン
    |--------------------------------------------------------------------------
    |
    | この値は、セッションCookieが利用可能なドメインおよびサブドメインを
    | 決定します。デフォルトでは、Cookieはルートドメインおよびすべての
    | サブドメインで利用可能になります。通常、これを変更する必要はありません。
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | このオプションをtrueに設定すると、セッションCookieはブラウザが
    | HTTPS接続を持っている場合にのみサーバーに送信されます。これにより、
    | Cookieが安全に送信できない場合に送信されることを防ぎます。
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTPアクセスオンリー
    |--------------------------------------------------------------------------
    |
    | この値をtrueに設定すると、JavaScriptからCookieの値にアクセスする
    | ことができなくなり、CookieはHTTPプロトコルを介してのみアクセス
    | できます。このオプションを無効にする必要があることはほとんどありません。
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | このオプションは、クロスサイトリクエストが発生したときにCookieが
    | どのように動作するかを決定し、CSRF攻撃を緩和するために使用できます。
    | デフォルトでは、セキュアなクロスサイトリクエストを許可するために、
    | この値を "lax" に設定します。
    |
    | 参照: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | サポートされている値: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | パーティション化されたCookie
    |--------------------------------------------------------------------------
    |
    | この値をtrueに設定すると、Cookieがクロスサイトコンテキストの
    | トップレベルサイトに関連付けられます。パーティション化されたCookieは、
    | "secure" フラグが設定されており、Same-Site属性が "none" に設定されている
    | 場合にブラウザで受け入れられます。
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
