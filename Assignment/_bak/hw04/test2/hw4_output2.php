<?php 
$fruit['a']['apple'] = '蘋果';
$fruit['b']['banana'] = '香蕉';
$fruit['p']['pineapple'] = '鳳梨';
$fruit['p']['peach'] = '水蜜桃';
$fruit['s']['strawberry'] = '草莓';
$fruit['g']['grapes'] = '葡萄';
$fruit['o']['orange'] = '橘子';
$fruit['w']['watermelon'] = '西瓜';
$fruit['l']['lemon'] = '檸檬';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>output</title>
</head>
<body>

<?php

$queryword = strtolower(str)

foreach ($fruit as $key1 => $key2) {
	foreach ($key2 as $eng => $chn) {
		if ($_POST['word'] == $eng || $_POST['word'] == $chn)
		{
			echo $key1.':';
			echo '<table border="1"><tr><td width="200">英文</td><td width="200">中文</td></tr>';
			echo '<tr><td>'.$eng .'</td><td>'. $chn .'</td></tr></table>';
			// test
			echo '<br><br>';
			
			// echo $key2;
			exit;
		}
	}
}

echo '找不到！';
?>


</body>
</html>
