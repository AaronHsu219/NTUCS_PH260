<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>4-1.php</title>
</head>
<body>
<?php 
$person1 = '阿寶';
$person2 = '阿花';

$total = array(
	'A' => array($_POST['a_1'] , $_POST['a_2'], $_POST['a_3']),
	'B' => array($_POST['b_1'] , $_POST['b_2'], $_POST['b_3'])
	);

$sum = array('A' => 0, 'B' => 0 );

foreach ($total as $key => $value) {
	for ($i=0; $i < sizeof($value); $i++) { 
		$sum[$key] += $value[$i];
	}
}

echo "這季".$person1."的總業積是：".$sum['A'].'千元';
echo '<br>';
echo "這季".$person2."的總業積是：".$sum['B'].'千元';
echo '<br>';
echo '<br>';

if ($sum['A'] > $sum['B']) {
	// echo ''$person1."wins.";
	echo '這季'.$person1."比較棒喔！".$person2."請加油~";
}
elseif ($sum['A'] < $sum['B']) {
	echo '這季'.$person2."比較棒喔！".$person1."請加油~";
}
else{
	echo '<font color="red">'.'這季'.$person1."跟".$person2."平手喔~".
	'</font>';
}

?>
</body>
</html>
