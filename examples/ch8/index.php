<html>
<head>
<title>PHP 網路商城</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<table width="900" border="0">
	<tr>
		<td width="50%" bgcolor="#EEEEEE">
			<h1><i>PHP 網路商城</i></h1>
		</td>
		<td>
			<?php include ('member.php'); ?>
		</td>
	</tr>
</table>

<table width="900" border="0">
	<tr>
		<td width="250">
			<?php include ('bar.php'); ?>
		</td>
		<td>
			<table width="100%" bgcolor="#AAAAAA">
			<?php
			$link_ID = mysql_connect('localhost', 'root', 'student');
			mysql_select_db('ch8');
			mysql_query("SET CHARACTER SET UTF8;");

			$newsRecord = mysql_query("SELECT * FROM news ORDER BY newsDate DESC LIMIT 0, 2 ;", $link_ID);
			while ($newsArray = mysql_fetch_array($newsRecord))
			{
				echo '<tr bgcolor="white">';
				echo '<td width="30%" align="center">'. $newsArray['newsDate'] .'</td>';
				echo '<td><a href="news_view.php?no='. $newsArray['newsNo'] .'">'. $newsArray['newsSubject'] .'</a></td>';
				echo '</tr>';
			}
			?>
			<tr><td bgcolor="white" colspan="2" align="center"><a href="news.php">更多最新訊息</a></td></tr>
			</table>
		</td>
	</tr>
</table>

<table width="900" border="0">

<?php
$num = 0;
$productTable = array();

$productRecord = mysql_query("SELECT * FROM product ORDER BY RAND() DESC LIMIT 0, 9 ;", $link_ID);
while ($productArray = mysql_fetch_array($productRecord))
{
	$productTable[] = array(
		'productNo' => $productArray['productNo'],
		'productName' => $productArray['productName'],
		'productAbstract' => $productArray['productAbstract'],
		'productPrice' => $productArray['productPrice'],
		'productStock' => $productArray['productStock']
	);
	$num++;
}

for ($i = 0; $i < 9; $i++)
{
	if ($i % 3 == 0)
	{
		echo '<tr>'."\n";
	}

	echo '<td width="300" align="center">'."\n";

	if (isset($productTable[$i]))
	{
		echo '<table width="80%" bgcolor="gray" border="1">'."\n";
		echo '<tr bgcolor="white" align="center"><td colspan="2"><a href="product_view.php?no='. $productTable[$i]['productNo'] .'"><img src="img.php?no='. $productTable[$i]['productNo'] .'" border="0" width="150" height="150"></a></td></tr>'."\n";
		echo '<tr bgcolor="white" align="center"><td colspan="2">'. $productTable[$i]['productName'] .'</td></tr>'."\n";
		echo '<tr bgcolor="white" align="center"><td>售價：$'. number_format($productTable[$i]['productPrice']) .'</td><td>庫存：'. $productTable[$i]['productStock'] .'</td></tr>'."\n";
		echo '<tr bgcolor="white" align="center"><td colspan="2">'. $productTable[$i]['productAbstract'] .'</td></tr>'."\n";
		echo '</table>'."\n";
	}
	
	echo '</td>'."\n";

	if ($i % 3 == 2)
	{
		echo '</tr>'."\n";
	}
}
?>

</table>

</body>
</html>
