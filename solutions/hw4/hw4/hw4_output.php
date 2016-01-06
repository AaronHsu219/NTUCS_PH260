<?php
include('fruits.php');

if ($_POST['word'])
{
	$word = strtolower($_POST['word']);

	//while (list ($key, $value) = each($fruit))
	foreach ($fruit as $key => $value)
	{
		// $fruit['a']['apple'] = '蘋果';
		// $key = 'a'
		// $value = ['apple'] = '蘋果'

		//while (list ($fruitEn, $fruitCh) = each($value))
		foreach ($value as $fruitEn => $fruitCh)
		{
			if ($word == $fruitEn)
			{
				echo '<table width="300" border="1">';
				echo '<tr><td>';
				echo '<font color="red">'. $fruitEn .'</font>';
				echo '</td><td>';
				echo $fruitCh .'</td></tr></table>';
				exit;
			}
			elseif ($word == $fruitCh)
			{
				echo '<table width="300" border="1">';
				echo '<tr><td>';
				echo $fruitEn;
				echo '</td><td>';
				echo '<font color="red">'. $fruitCh .'</font>';
				echo '</td></tr></table>';
				exit;
			}
		}
	}

	echo '找不到你輸入的單字喔！';
	echo '<a href="hw4_input.php">回上一頁重新查詢</a>';
}
else
{
	echo '請輸入一個中文或英文水果單字';
}
?>