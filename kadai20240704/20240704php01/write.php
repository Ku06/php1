
<?php
$name= $_POST["name"];
$email= $_POST["email"];
$memo= $_POST["memo"];
$c = ",";
$str = $name.$c.$email.$c.$memo;//

$file = fopen("data.csv","a");//後ろのaで追加書き込みAddの意味
fwrite($file,$str."\n");//fileに対して$strの内容を追記
fclose($file);

header("Location: index.php");
exit;
?>
