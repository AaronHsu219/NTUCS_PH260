<?php
$link = mysql_connect('localhost', 'root', 'student');
mysql_select_db('hw6');
mysql_query("SET CHARACTER SET UTF8;");

// 即時的建立一個虛擬欄位放五科成績的加總值
// (hw6Grade1 + hw6Grade2 + hw6Grade3 + hw6Grade4 + hw6Grade5) AS total
// 再用這個虛擬欄位做降冪排序
$result = mysql_query("SELECT *, (hw6Grade1 + hw6Grade2 + hw6Grade3 + hw6Grade4 + hw6Grade5) AS total FROM hw6 ORDER BY total DESC;");

function redFont($args)
{
	return ($args < 60) ? '<font color="red">'. $args .'</font>' : $args;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HW6 - analysis</title>
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
	while ($record = mysql_fetch_array($result))
	{
		$avg = number_format(($record['total'] / 5), 2);
		
		$grade[0] += $record['hw6Grade1'];
		$grade[1] += $record['hw6Grade2'];
		$grade[2] += $record['hw6Grade3'];
		$grade[3] += $record['hw6Grade4'];
		$grade[4] += $record['hw6Grade5'];
		$grade[5] += $record['total'];
		$grade[6] += $avg;

		echo '<tr bgcolor="white">';
		echo '<td>'. ++$i .'</td>';
		echo '<td>'. $record['hw6Name'] .'</td>';
		echo '<td>'. $record['hw6SN'] .'</td>';
		echo '<td>'. $record['hw6Email'] .'</td>';
		echo '<td>'. redFont($record['hw6Grade1']) .'</td>';
		echo '<td>'. redFont($record['hw6Grade2']) .'</td>';
		echo '<td>'. redFont($record['hw6Grade3']) .'</td>';
		echo '<td>'. redFont($record['hw6Grade4']) .'</td>';
		echo '<td>'. redFont($record['hw6Grade5']) .'</td>';
		echo '<td>'. $record['total'] .'</td>';
		echo '<td>'. $avg .'</td>';
		echo '</tr>';
	}
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