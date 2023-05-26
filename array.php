<?php
//配列
$array_1 = [1, 2, 3];
$array_2 = [
    ['赤', '青', '緑'],
    ['紫', '黄', '黒'],
];
// echo'<pre>';
// echo '<br>';
// var_dump($array_2);

//連想配列
$array_member = [
    'name' => '本多',
    'age' => 12,
    'hobby' => 'baseball'
];
// echo $array_member['name'];
// echo'<pre>';
// echo '<br>';
// var_dump($array_menber);

$array_member_2 = [
    '本多'=> [
        'age' => 14,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'age' => 34,
        'hobby' => 'サッカー'
    ],
];
echo $array_member_2['本多']['age'];
echo '<pre>';
echo '<br>';
var_dump($array_member_2);
