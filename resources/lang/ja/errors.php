
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Error Language Lines
    |--------------------------------------------------------------------------
    |
    | Message list of code composed of 3 digit numbers representing
    | the meaning of the response from the Web server in HTTP.
    |
    */

    '400' => [
        'title' => 'Bad Request',
        'message' => 'タイプミス等、リクエストにエラーがあります。'
    ],
    '401' => [
        'title' => 'Unauthorixed',
        'message' => '認証に失敗しました。（パスワードを適当に入れてみた時などに発生）'
    ],
    '402' => [
        'title' => 'Payment Required',
        'message' => '（将来の使用のための予約コード）'
    ],
    '403' => [
        'title' => 'Forbidden',
        'message' => 'あなたにはアクセス権がありません。'
    ],
    '404' => [
        'title' => '(File)Not Found',
        'message' => '該当アドレスのページはありません、またはそのサーバーが落ちている。'
    ],
    '405' => [
        'title' => 'Method Not Allowed',
        'message' => '許可されていないメソッドタイプのリクエストを受けた。'
    ],
    '406' => [
        'title' => 'Not Acceptable',
        'message' => 'Acceptヘッダから判断された結果、受け入れられない内容を持っていた。'
    ],
    '407' => [
        'title' => 'Proxy Authentication Required',
        'message' => '最初にProxy認証が必要です。'
    ],
    '408' => [
        'title' => 'Request Time-out',
        'message' => 'リクエストの待ち時間内に反応がなかった。'
    ],
    '409' => [
        'title' => 'Conflict',
        'message' => 'そのリクエストは現在の状態のリソースと矛盾するため完了できなかった。'
    ],
    '410' => [
        'title' => 'Gone',
        'message' => 'そのリクエストはサーバでは利用できず転送先のアドレスも分からない。'
    ],
    '411' => [
        'title' => 'Length Required',
        'message' => '定義されたContent-Lengthの無いリクエストを拒否しました。'
    ],
    '412' => [
        'title' => 'Precondition Failed',
        'message' => '1つ以上のリクエストヘッダフィールドで与えられた条件がサーバ上のテストで不正であると判断しました。'
    ],
    '413' => [
        'title' => 'Request Entity Too Large',
        'message' => '処理可能量より大きいリクエストのため拒否しました。'
    ],
    '414' => [
        'title' => 'Request-URI Too Large',
        'message' => 'リクエストURIが長すぎるため拒否しました。'
    ],
    '415' => [
        'title' => 'Unsupported Media Type',
        'message' => 'リクエストされたメソッドに対してリクエストされたリソースがサポートしていないフォーマットであるため、サーバはリクエストのサービスを拒否しました。'
    ],
    '416' => [
        'title' => 'Requested range not satisfiable',
        'message' => 'リクエストにRangeヘッダフィールドは含まれていたが、If-Rangeリクエストヘッダフィールドがありません。'
    ],
    '417' => [
        'title' => 'Expectation Failed',
        'message' => 'Expectリクエストヘッダフィールド拡張が受け入れられなかった。'
    ],
    '500' => [
        'title' => 'Internal Server Error',
        'message' => 'CGIスクリプトなどでエラーが出た。'
    ],
    '501' => [
        'title' => 'Not Implemented',
        'message' => 'リクエストを実行するための必要な機能をサポートしていない。'
    ],
    '502' => [
        'title' => 'Bad Gateway',
        'message' => 'ゲートウェイやProxyとして動作しているサーバがリクエストを実行しようとしたら不正なレスポンスを受け取った。'
    ],
    '503' => [
        'title' => 'Service Unavailable',
        'message' => 'そのアドレスは事情によりアクセスできません。'
    ],
    '504' => [
        'title' => 'Gateway Time-out',
        'message' => 'リクエストを完了するために必要なDNSなどのサーバからレスポンスを受信できなかった。'
    ],
    '505' => [
        'title' => 'HTTP Version not supported',
        'message' => 'サポートされていないHTTPプロトコルバージョンを受けた。'
    ],
    '999' => [
        'title' => 'エラー',
        'message' => '不明なエラーです。'
    ],

];
