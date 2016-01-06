<?php 
// $fruit = array(
// 	'apple' => '蘋果', 
// 	'orange' => '橘子',
// 	'watermelon' => '西瓜',
// 	'strawberry' => '草莓',
// 	'pineapple' => '鳳梨',
// 	);




// $fruit['a']['apple'] = '蘋果';
// $fruit['b']['banana'] = '香蕉';
// $fruit['p']['pineapple'] = '鳳梨';
// $fruit['p']['peach'] = '水蜜桃';
// $fruit['s']['strawberry'] = '草莓';
// $fruit['g']['grapes'] = '葡萄';
// $fruit['o']['orange'] = '橘子';
// $fruit['w']['watermelon'] = '西瓜';
// $fruit['l']['lemon'] = '檸檬';


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>output</title>
</head>
<body>
<?php 

$fruit['apple'] = '蘋果';
$fruit['orange'] = '橘子';
$fruit['watermelon'] = '西瓜';
$fruit['strawberry'] = '草莓';
$fruit['pineapple'] = '鳳梨';

foreach($fruit as $eng => $chn)
{
	if ($_POST['word'] == $eng)
	{
		echo '<h3>2.</h3><br>';
		echo '<table border="1"><tr><td width="200">英文</td><td width="200">中文</td></tr>';
		echo '<tr><td>'.$eng .'</td><td>'. $chn .'</td></tr></table>';
		exit;
	}
}

echo '找不到！';

?>



<?php

// if ($fruit[$_POST['fruit']]) {
// 	echo $_POST['fruit'].' 的中文是 '.$fruit[$_POST['fruit']];
// }
// else {
// 	echo '水果字典中沒有'.$_POST['fruit'].'這個單字。';
// }

?>

</body
</html>