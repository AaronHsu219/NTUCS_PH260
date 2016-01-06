<?php
$student = array();
$total = array();

$fileContent = file('grade.txt');

//echo $fileContent[8];
//exit;

for ($i = 0; $i < sizeof($fileContent); $i++)
{
	list ($name, $sn, $email, $g1, $g2, $g3, $g4, $g5) = explode(',', $fileContent[$i]);
	//$array = explode(',', $fileContent[$i]);
	/*
	$name = $array[0];
	$sn = $array[1];
	...
	$g5 = $array[7];
	*/

	$total[$sn] = $g1 + $g2 + $g3 + $g4 + $g5;
	$student[$sn] = array(
		'name' => $name,	// 'name' => $array[0],
		'email' => $email,	// 'email' => $array[2],
		'g1' => $g1,		// 'g1' => $array[3],
		'g2' => $g2,		// 'g2' => $array[4],
		'g3' => $g3,		// 'g3' => $array[5],
		'g4' => $g4,		// 'g4' => $array[6],
		'g5' => $g5			// 'g5' => $array[7],
	);
}
	
arsort($total);

function redFont($args)
{
	return ($args < 60) ? '<font color="red">'. $args .'</font>' : $args;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HW5 - analysis</title>
</head>

<body>

<table width="900" border="1" bgcolor="black">
	<tr bgcolor="#EEEEEE" align="center">
		<td>名次</td>
		<td>姓名</td>
		<td>學號</td>
		<td>Email</td>
		<td>國文</td>
		<td>英文</td>
		<td>數學</td>
		<td>物理</td>
		<td>化學</td>
		<td>總分</td>
		<td>平均</td>
	</tr>

	<?php
	$i = 0;
	$grade = array(0, 0, 0, 0, 0, 0, 0);
	while (list($key, $value) = each($total))
	{
		$avg = number_format(($value / 5), 2);

		$grade[0] += $student[$key]['g1'];
		$grade[1] += $student[$key]['g2'];
		$grade[2] += $student[$key]['g3'];
		$grade[3] += $student[$key]['g4'];
		$grade[4] += $student[$key]['g5'];
		$grade[5] += $value;
		$grade[6] += $avg;

		echo '<tr bgcolor="white">';
		echo '<td>'. ++$i .'</td>';
		echo '<td>'. $student[$key]['name'] .'</td>';
		echo '<td>'. $key .'</td>';
		echo '<td>'. $student[$key]['email'] .'</td>';
		echo '<td>'. redFont($student[$key]['g1']) .'</td>';
		echo '<td>'. redFont($student[$key]['g2']) .'</td>';
		echo '<td>'. redFont($student[$key]['g3']) .'</td>';
		echo '<td>'. redFont($student[$key]['g4']) .'</td>';
		echo '<td>'. redFont($student[$key]['g5']) .'</td>';
		echo '<td>'. $value .'</td>';
		echo '<td>'. $avg .'</td>';
		echo '</tr>';
	}
	
	
	/*for($j = 0; $j < sizeof($grade); $j++)
	{
		echo '$j = ' . $j .', $grade[$j] = ' . $grade[$j] . '<br>';
	}*/
	?>

	<tr bgcolor="#EEEEEE" align="center">
		<td colspan="4" align="right">全班平均：</td>
		<?php
		for ($j = 0; $j < sizeof($grade); $j++)
		{
			echo '<td>'. number_format(($grade[$j] / $i), 2) .'</td>';
		}
		?>
	</tr>
</table>

</body>
</html>