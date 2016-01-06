<?php
$year = date('Y') - 1911;
$mon = date('m');
$day = date('d');
if ((date('a') == 'am'))
{
	$apm = '上午';
}
else
{
	$apm = '下午';
}
$hour = date('g');
$min = date('i');
$sec = date('s');

echo '現在是民國' . $year . '年'. $mon .'月'. $day .'日<br>';
echo $apm . $hour .'時'. $min .'分' . $sec . '秒';
?>