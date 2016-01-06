<?php 
$fruit = array(
	'apple' => '蘋果', 
	'orange' => '橘子',
	'watermelon' => '西瓜',
	'strawberry' => '草莓',
	'pineapple' => '鳳梨',
	);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>output</title>
</head>
<body>
<?php

if ($fruit[$_POST['fruit']]) {
	echo $_POST['fruit'].' 的中文是 '.$fruit[$_POST['fruit']];
}
else {
	echo '水果字典中沒有'.$_POST['fruit'].'這個單字。';
}

?>

</body
</html>