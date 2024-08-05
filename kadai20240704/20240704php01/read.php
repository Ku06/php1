<?php

$file = fopen('data.csv', 'r');

//繰り返し処理
while(!feof($file)){
    //一行ずつ出力
    $line=fgets($file);
    echo $line;
    //表示

}

//閉じる
fclose($file);

?>
