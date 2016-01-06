<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>output</title>
</head>
<body>
<?php

$avg = $_POST['var_Ch'] + $_POST['var_Math'] + $_POST['var_Eng'];
$sum = $avg/3;

echo "國文成績：".$_POST['var_Ch']."<br>";
echo "數學成績：".$_POST['var_Math']."<br>";
echo "英文成績：".$_POST['var_Eng']."<br>";
echo "總分為".$sum."<br>";
echo "平均為".$avg."<br>";
?>
</body
</html>