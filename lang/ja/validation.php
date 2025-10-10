<?php

return [
  'accepted'             => ':attributeを承認してください。',
  'active_url'           => ':attributeが有効なURLではありません。',
  'after'                => ':attributeには、:date以降の日付を指定してください。',
  'alpha'                => ':attributeにはアルファベッドのみ使用できます。',
  'alpha_dash'           => ':attributeには、英数字、ハイフン（-）、アンダースコア（_）が使用できます。',
  'alpha_num'            => ':attributeには英数字のみ使用できます。',
  'array'                => ':attributeには配列を指定してください。',
  'before'               => ':attributeには、:date以前の日付を指定してください。',
  'between'              => [
    'numeric' => ':attributeは、:minから:maxの間で指定してください。',
    'file'    => ':attributeは、:min KBから:max KBの間で指定してください。',
    'string'  => ':attributeは、:min文字から:max文字の間で指定してください。',
    'array'   => ':attributeの項目は、:min個から:max個にしてください。',
  ],
  'boolean'              => ':attributeは、trueかfalseを指定してください。',
  'confirmed'            => ':attributeと確認フィールドが一致しません。',
  'date'                 => ':attributeは有効な日付ではありません。',
  'email'                => ':attributeは有効なメールアドレス形式で指定してください。',
  'filled'               => ':attributeは必須です。',
  'image'                => ':attributeには画像ファイルを指定してください。',
  'in'                   => '選択された:attributeは正しくありません。',
  'integer'              => ':attributeには整数を指定してください。',
  'max'                  => [
    'numeric' => ':attributeには:max以下の数字を指定してください。',
    'string'  => ':attributeは:max文字以下で指定してください。',
  ],
  'min'                  => [
    'numeric' => ':attributeには:min以上の数字を指定してください。',
    'string'  => ':attributeは:min文字以上で指定してください。',
  ],
  'required'             => ':attributeは必須です。',
  'string'               => ':attributeは文字列で指定してください。',
  'unique'               => ':attributeはすでに使用されています。',

  /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | ここでは ":attribute" プレースホルダに表示される値を指定できます。
    | たとえば "email" → "メールアドレス" のように変換できます。
    |
    */
  'attributes' => [
    'username' => 'ユーザー名',
    'email'    => 'メールアドレス',
    'password' => 'パスワード',
  ],
];
