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
