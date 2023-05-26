<?php
// function test(引数1、引数2){
//     //処理

//     // return 戻り値
// }

function test(){
    echo 'test';
}
test();

echo '<br>';

$comment = 'コメント2';
function getComment($string){
    echo $string;
}
getComment($comment);

echo '<br>';

function getNumberOfCommet(){
    return 5;
}
echo getNumberOfCommet();

echo '<br>';

//引数2つ
function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}
$total = sumPrice(3, 5);
echo $total;
