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

echo '<p>'.$_GET['firstletter'].'</p>';

foreach ($fruit as $key1 => $key2) {
	if ($_GET['firstletter'] == $key1){
		foreach ($key2 as $eng => $chn) {
			echo $eng.' '.$chn.'<br>';
		}		
	}
}

?>

</body>
</html>
