<?php

//for 繰り返す数が決まっていたら
for($i = 0; $i < 10; $i++){
    echo $i; // => 0123456789
}

echo '<br>';

for ($i = 0; $i < 10; $i++) {
    if($i === 5){
        break;
    }
    echo $i; // => 01234
}

echo '<br>';

for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i; // => 012346789
}
echo '<br>';

//while　繰り返す数が決まっていなかったら
$j = 0;
while($j < 5){
    echo $j; // => 01234
    $j++;
}
