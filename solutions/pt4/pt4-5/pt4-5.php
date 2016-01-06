<?php
$num = $_POST['num'];

//echo 'num is: ' . $num . '<br>';
//echo 'num type: ' . gettype($num);
//exit;

if (is_numeric($num) == false)
//setType($num, 'double');
//if (!$num)
{
	echo 'please insert a number';
	exit;
}
else
{
	echo 'INPUT: ' . $num .'<br>';
	echo 'abs: ' . abs($num) . '<br>';
	echo 'round: ' . round($num) . '<br>';
	echo 'ceil: ' . ceil($num) . '<br>';
	echo 'floor: ' . floor($num) . '<br>';
}
?>