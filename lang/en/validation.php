<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語ライン
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、バリデータクラスで使用されるデフォルトエラーメッセージを
    | 含んでいます。各ルールには複数のバージョンがあり、
    | 必要に応じてカスタマイズできます。
    |
    */

    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:dateより後の日付でなければなりません。',
    'after_or_equal' => ':attributeは:date以降の日付でなければなりません。',
    'alpha' => ':attributeには文字のみ使用できます。',
    'alpha_dash' => ':attributeには、文字、数字、ダッシュ、アンダースコアのみ使用できます。',
    'alpha_num' => ':attributeには、文字と数字のみ使用できます。',
    'array' => ':attributeは配列でなければなりません。',
    'boolean' => ':attributeには、trueかfalseを指定してください。',
    'confirmed' => ':attributeと確認フィールドが一致しません。',
    'date' => ':attributeは有効な日付ではありません。',
    'email' => ':attributeは有効なメールアドレスでなければなりません。',
    'exists' => '選択された:attributeは無効です。',
    'image' => ':attributeは画像でなければなりません。',
    'integer' => ':attributeは整数でなければなりません。',
    'max' => [
        'numeric' => ':attributeは:max以下でなければなりません。',
        'file' => ':attributeは:maxキロバイト以下でなければなりません。',
        'string' => ':attributeは:max文字以下でなければなりません。',
        'array' => ':attributeは:max個以下でなければなりません。',
    ],
    'min' => [
        'numeric' => ':attributeは少なくとも:minでなければなりません。',
        'file' => ':attributeは少なくとも:minキロバイトでなければなりません。',
        'string' => ':attributeは少なくとも:min文字でなければなりません。',
        'array' => ':attributeは少なくとも:min個でなければなりません。',
    ],
    'required' => ':attributeは必須です。',
    'string' => ':attributeは文字列でなければなりません。',
    'unique' => ':attributeは既に存在しています。',
    'url' => ':attributeは有効なURL形式でなければなりません。',

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'name' => '名前',
    ],

];
