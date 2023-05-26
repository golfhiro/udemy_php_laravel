<?php

//switch
//if文のが見やすいため、switchは使用しない方がいい
//一応説明しておく
$data = 1;
switch($data){
    case 1:
        echo '1です';
        break; //breakがないと全て表示される

    case 2:
        echo '2です';
        break;

    default:
        echo '1-2ではありません';
}
