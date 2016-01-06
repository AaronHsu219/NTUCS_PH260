<html>
<head>
<title>HW4 - solution</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<h1>強化版水果字典</h1>

<form method="POST" action="hw4_output.php">
請輸入要查詢的中英文單字：
<input type="text" name="word">
<input type="submit" value="送出">
</form>

<br>

<?php
include('fruits.php');

$a2z = range('a', 'z');

for ($i = 0; $i < sizeof($a2z); $i++)
{
	echo ' ';

	if (sizeof($fruit[$a2z[$i]]) > 0)
	{
		echo '<a href="hw4_view.php?prefix='. $a2z[$i] .'">'. $a2z[$i] .'</a>';
	}
	else
	{
		echo $a2z[$i];
	}
	echo "\n";

	echo ' ';
}
?>

</body>
</html>
