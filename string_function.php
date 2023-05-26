<?php

//組み込み関数 文字列の長さ
$text = 'abc';
echo strlen($text);

echo '<br>';

$text_2 = 'あいうえお';
echo mb_strlen($text_2);

echo '<br>';

//文字列の置換
$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

echo '<br>';

//指定文字列で分割
$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str_2));

echo '<br>';

//正規表現
//文字かどうか、数字かどうか、郵便番号、メールアドレスか test@gmail.com
$str_3 = '特定の文字列があるか確認する';
echo preg_match('/文字列/', $str_3);

echo '<br>';

//指定文字列から文字列を取得する
echo substr('abcde', 1);

echo '<br>';

$array = ['りんご', 'みかん'];
array_push($array, 'ぶどう', 'なし');
echo '<pre>';
var_dump($array);
