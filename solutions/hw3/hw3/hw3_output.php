<?php
$fruitEng = array('apple', 'orange', 'watermelon', 'strawberry', 'pineapple');
$fruitChn = array('蘋果', '橘子', '西瓜', '草莓' ,'鳳梨');

$flag = false;

for ($i = 0; $i < sizeof($fruitEng); $i++)
{
	if ($_POST['word'] == $fruitEng[$i])
	{
		$flag = true;
		break;
	}
}

if ($flag)
{
	echo '<h3>1.</h3><br>';
	echo $fruitEng[$i] . ' 的中文是：' . $fruitChn[$i];
}
else
{
	echo '字典中沒有這個字！';
}
?>