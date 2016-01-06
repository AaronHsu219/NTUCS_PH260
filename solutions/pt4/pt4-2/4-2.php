<?php
$array = array(0, 0, 0, 0, 0, 0, 0, 0);

for ($i = 0; $i < 10000; $i++)
{
	$num = rand(1, 8);

	++$array[$num - 1];
	//$array[$num - 1]++;
	//$array[$num - 1] += 1;
	//$array[$num - 1] = $array[$num - 1] + 1;
}

for ($i = 0; $i < sizeof($array); $i++)
{
	echo '點數 ' . ($i + 1) . ': ' . $array[$i] . ', 機率 '. ($array[$i] / 100) .'%<br>';
}

?>