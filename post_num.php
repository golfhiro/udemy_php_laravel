<!-- 郵便番号をチェック
    - 全角を半角に
    - ハイフンを削除
    - 数字かどうか
    - 7文字かどうか
-->

<?php
//camelCase　大文字を入れている
// checkPostalCode()

//snakeCase _を使用
// check_postal_code()

$postalCode = '123-45678';
function checkPostalCode($str){
    $replaced = str_replace('-', '',$str);
    $length = strlen($replaced);

    var_dump($length);
    if($length === 7){
        return true;
    }

    return false;
}

var_dump(checkPostalCode($postalCode));
