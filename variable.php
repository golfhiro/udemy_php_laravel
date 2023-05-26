<!-- <!DOCTYPE html>
<head>

</head>
<body>
こちらはHTMLです。 -->

<?php

$test_1 = 123;
$test_2 = 456;
$test_3 = $test_1 . $test_2;
echo $test_3;
echo '<br>';

echo 'こちらはPHPです';
echo '<br>';

const MAX = '10';
echo MAX;
echo '<br>';

//　変数の型がわかるメソッド。
var_dump($test_3);

// 下記のコードは現在のPHPの情報が閲覧できる
// phpinfo();

?>
<!-- </body>
</html> -->
