<!-- // 変数のスコープ -->

<?php

$globalVariable = 'グローバル変数です';

function checkScope(){
    $localVariable = 'ローカル変数です';

    echo $localVariable;
}

echo $globalVariable;

echo '<br>';

checkScope();
