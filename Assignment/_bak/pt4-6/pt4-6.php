<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>課堂練習4-6</title>
</head>
<?php 

if (date('A') == 'AM') {
	$APM = '早上';
} else {
	$APM = '晚上';
}

// $APM = date('A');
$year = date('Y');
$month = date('m');
$day = date('d');
$hour = date('h');
$min = date('i');
$sec = date('s');

// echo '現在時刻是 '.$hour.' 時 ';
// echo $min.' 分 '.$sec.' 秒 ';

echo '今天是民國'.($year-1911).'年'.$month.'月'.$day.'日';
echo '<br>';
echo '現在是'.$APM.' '.$hour.'點'.$min.'分'.$sec.'秒';

?>

<font></font>

<body>
</body>
</html>