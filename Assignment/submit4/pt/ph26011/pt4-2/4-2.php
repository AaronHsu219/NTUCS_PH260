<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課堂練習4-2</title>
</head>
<body>

<?php 
$array = array(0, 0, 0, 0, 0, 0);

for ($i = 0; $i < 10000; $i++) { 
	$num = rand(1,6);
	++$array[$num - 1];
}

for ($i = 0; $i < sizeof($array); $i++) { 
	echo '點數 '.($i + 1).': '.$array[$i].', 機率 '.($array[$i]/10000).'%'.'<br>';
}

?>

</body>
</html>
