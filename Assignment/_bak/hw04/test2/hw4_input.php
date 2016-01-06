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

<html>
<head>
<title>HW4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<h1>進階版水果字典</h1>

<form method="POST" action="hw4_output2.php">
請輸入要查詢的英文單字：
<input type="text" name="word">
<input type="submit" value="送出">
<br>
<br>
<div>或直接瀏覽單字列表</div>

</form>

<?php 

foreach (range('a', 'z') as $firstletter) {	
	$flag = false;
	foreach ($fruit as $key1 => $key2) {
		if($firstletter == $key1){
			$flag = true;			
			break;
		} 	
	}

	if ($flag) {
		echo '<a href="get.php?firstletter='.$firstletter.'">'.$firstletter.'</a>'.' ';
	} else {
		echo $firstletter.' ';
	}
}

?>

</body>
</html>
