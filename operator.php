<?php

$test_1 = 2;
$test_2 = 3;
$test_3 = $test_1 * $test_2;
// echo $test_3;

$height = 90;

if ($height != 90) {
    echo '身長は' . $height . 'cmです';
} else {
    echo 'No';
}

echo '<br>';

$signal = 'yellow';
if ($signal === 'red'){
    echo '止まれ';
} else if($signal === 'yellow'){
    echo '一旦停止';
} else {
    echo '進め';
}

echo '<br>';
//三項演算子
//if else
//条件 ? 真 : 偽

$math = 890;
$comment = $math > 80 ? 'good' : 'bad';
echo $comment;
