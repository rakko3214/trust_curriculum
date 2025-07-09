<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute を承認してください。',
    'accepted_if'          => ':other が :value のとき、:attribute を承認する必要があります。',
    'active_url'           => ':attribute は有効な URL ではありません。',
    'after'                => ':attribute には :date より後の日付を指定してください。',
    'after_or_equal'       => ':attribute には :date 以降の日付を指定してください。',
    'alpha'                => ':attribute には英字のみ使用できます。',
    'alpha_dash'           => ':attribute には英数字、ハイフン、アンダースコアのみ使用できます。',
    'alpha_num'            => ':attribute には英数字のみ使用できます。',
    'array'                => ':attribute には配列を指定してください。',
    'before'               => ':attribute には :date より前の日付を指定してください。',
    'before_or_equal'      => ':attribute には :date 以前の日付を指定してください。',
    'between'              => [
        'numeric' => ':attribute は :min 〜 :max の間で指定してください。',
        'file'    => ':attribute は :min 〜 :max KB のファイルで指定してください。',
        'string'  => ':attribute は :min 〜 :max 文字で入力してください。',
        'array'   => ':attribute の項目は :min 〜 :max 個で指定してください。',
    ],
    'boolean'              => ':attribute には true か false を指定してください。',
    'confirmed'            => ':attribute と確認用入力が一致しません。',
    'current_password'     => '現在のパスワードが正しくありません。',
    'date'                 => ':attribute は有効な日付ではありません。',
    'date_equals'          => ':attribute は :date と同じ日付を指定してください。',
    'date_format'          => ':attribute の形式は :format と一致しません。',
    'declined'             => ':attribute を拒否してください。',
    'declined_if'          => ':other が :value のとき、:attribute を拒否してください。',
    'different'            => ':attribute と :other には異なる値を指定してください。',
    'digits'               => ':attribute は :digits 桁で指定してください。',
    'digits_between'       => ':attribute は :min 〜 :max 桁で指定してください。',
    'dimensions'           => ':attribute の画像サイズが無効です。',
    'distinct'             => ':attribute には重複した値があります。',
    'email'                => ':attribute には有効なメールアドレスを指定してください。',
    'ends_with'            => ':attribute は :values のいずれかで終わる必要があります。',
    'enum'                 => '選択された :attribute は無効です。',
    'exists'               => '選択された :attribute は無効です。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute には値を入力してください。',
    'gt'                   => [
        'numeric' => ':attribute は :value より大きい値を指定してください。',
        'file'    => ':attribute は :value KB より大きいファイルを指定してください。',
        'string'  => ':attribute は :value 文字より長く入力してください。',
        'array'   => ':attribute には :value 個より多くの項目を指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute は :value 以上の値を指定してください。',
        'file'    => ':attribute は :value KB 以上のファイルを指定してください。',
        'string'  => ':attribute は :value 文字以上で入力してください。',
        'array'   => ':attribute には :value 個以上の項目を指定してください。',
    ],
    'image'                => ':attribute には画像ファイルを指定してください。',
    'in'                   => '選択された :attribute は無効です。',
    'in_array'             => ':attribute フィールドは :other に存在しません。',
    'integer'              => ':attribute には整数を指定してください。',
    'ip'                   => ':attribute は有効な IP アドレスではありません。',
    'ipv4'                 => ':attribute は有効な IPv4 アドレスではありません。',
    'ipv6'                 => ':attribute は有効な IPv6 アドレスではありません。',
    'json'                 => ':attribute には有効な JSON 文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute は :value 未満の値を指定してください。',
        'file'    => ':attribute は :value KB 未満のファイルを指定してください。',
        'string'  => ':attribute は :value 文字未満で入力してください。',
        'array'   => ':attribute には :value 個未満の項目を指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute は :value 以下の値を指定してください。',
        'file'    => ':attribute は :value KB 以下のファイルを指定してください。',
        'string'  => ':attribute は :value 文字以下で入力してください。',
        'array'   => ':attribute には :value 個以下の項目を指定してください。',
    ],
    'mac_address'          => ':attribute は有効な MAC アドレスではありません。',
    'max'                  => [
        'numeric' => ':attribute は :max 以下で指定してください。',
        'file'    => ':attribute は :max KB 以下のファイルで指定してください。',
        'string'  => ':attribute は :max 文字以下で入力してください。',
        'array'   => ':attribute には :max 個以下の項目を指定してください。',
    ],
    'mimes'                => ':attribute には :values タイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には :values タイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute は少なくとも :min 以上を指定してください。',
        'file'    => ':attribute は少なくとも :min KB のファイルを指定してください。',
        'string'  => ':attribute は少なくとも :min 文字入力してください。',
        'array'   => ':attribute には少なくとも :min 個の項目を指定してください。',
    ],
    'multiple_of'          => ':attribute は :value の倍数でなければなりません。',
    'not_in'               => '選択された :attribute は無効です。',
    'not_regex'            => ':attribute の形式が無効です。',
    'numeric'              => ':attribute には数値を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute フィールドが存在している必要があります。',
    'prohibited'           => ':attribute フィールドは入力禁止です。',
    'prohibited_if'        => ':other が :value のとき :attribute フィールドは入力禁止です。',
    'prohibited_unless'    => ':other が :values に含まれていない限り :attribute フィールドは入力禁止です。',
    'prohibits'            => ':attribute フィールドが存在している場合 :other を入力できません。',
    'regex'                => ':attribute の形式が無効です。',
    'required'             => ':attribute は必須項目です。',
    'required_array_keys'  => ':attribute には :values のエントリが含まれている必要があります。',
    'required_if'          => ':other が :value のとき :attribute は必須です。',
    'required_unless'      => ':other が :values に含まれていない限り :attribute は必須です。',
    'required_with'        => ':values が存在するとき :attribute は必須です。',
    'required_with_all'    => ':values がすべて存在するとき :attribute は必須です。',
    'required_without'     => ':values が存在しないとき :attribute は必須です。',
    'required_without_all' => ':values が一つも存在しないとき :attribute は必須です。',
    'same'                 => ':attribute と :other が一致しません。',
    'size'                 => [
        'numeric' => ':attribute は :size を指定してください。',
        'file'    => ':attribute は :size KB のファイルを指定してください。',
        'string'  => ':attribute は :size 文字で入力してください。',
        'array'   => ':attribute には :size 個の項目を含めてください。',
    ],
    'starts_with'          => ':attribute は :values のいずれかで始まる必要があります。',
    'string'               => ':attribute は文字列で指定してください。',
    'timezone'             => ':attribute は有効なタイムゾーンである必要があります。',
    'unique'               => ':attribute はすでに使用されています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute は有効な URL 形式で指定してください。',
    'uuid'                 => ':attribute は有効な UUID である必要があります。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード（確認用）',
    ],

];
