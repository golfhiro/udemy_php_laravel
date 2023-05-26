<?php

$members = [
    'name' => '本田',
    'age' => 15,
    'hobby' => 'サッカー',
];

foreach($members as $member){
    echo $member;
    echo '<br>';
}

foreach($members as $key => $value){
    echo $key . 'は' . $value . 'です。';
    echo '<br>';
}

$members_2 = [
    '本多' => [
        'age' => 14,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'age' => 34,
        'hobby' => 'サッカー'
    ],
];
foreach($members_2 as $members_1){
    foreach($members_1 as $member){
        echo $member;
        echo '<br>';
    }
}
