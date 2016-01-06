<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>PT4-1 output</title>
</head>

<body>
<?php
$total = array(
	'A' => array($_POST['a_1'], $_POST['a_2'], $_POST['a_3']),
	'B' => array($_POST['b_1'], $_POST['b_2'], $_POST['b_3'])
);

$sum = array('A' => 0, 'B' => 0);

// $key : A; $value : A營業員的3個月業績
// $key : B; $value : B營業員的3個月業績
#foreach ($total as $key => $value)
while (list($key, $value) = each($total))
{
	// 分別將營業員 A 與營業員 B 的 3 個月業績加總起來
	#for ($i = 0; $i < sizeof($total[$key]); $i++)
	for ($i = 0; $i < sizeof($value); $i++)
	{
		#$sum[$key] += $total[$key][$i];
		$sum[$key] += $value[$i];
	}
}
// 迴圈執行完之後
//$sum['A'] = $_POST['a_1'] + $_POST['a_2'] + $_POST['a_3'];
//$sum['B'] = $_POST['b_1'] + $_POST['b_2'] + $_POST['b_3'];

echo '營業員A的業績：' . $sum['A'] . '<br>';
echo '營業員B的業績：' . $sum['B'] . '<br>';

if ($sum['A'] > $sum['B'])
{
	echo '營業員A 的業績較好喔！';
}
elseif ($sum['B'] > $sum['A'])
{
	echo '營業員B 的業績較好喔！';
}
else
{
	echo '兩人平手！';
}
?>
</body>
</html>