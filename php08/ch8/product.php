<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的資料總量
$result = mysql_query("SELECT * FROM product;", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 3;									// 每 3 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM product ORDER BY productNo DESC LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);
while ($productArray = mysql_fetch_array($result))
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

mysql_close($link_ID);
?>

<html>
<head>
<title>商品訊息</title>
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
			<table width="100%" border="0">
				<?php
				for ($i = 0; $i < 9; $i++)
				{
					if ($i % 3 == 0)
					{
						print '<tr>';
					}

					print '<td width="300" align="center">';

					if (isset($productTable[$i]))
					{
						print '<table width="80%" bgcolor="gray" border="1">';
						print '<tr bgcolor="white" align="center"><td colspan="2"><a href="product_view.php?no='. $productTable[$i]['productNo'] .'"><img src="img.php?no='. $productTable[$i]['productNo'] .'" border="0" width="150" height="150"></a></td></tr>';
						print '<tr bgcolor="white" align="center"><td colspan="2">'. $productTable[$i]['productName'] .'</td></tr>';
						print '<tr bgcolor="white" align="center"><td>售價：$'. number_format($productTable[$i]['productPrice']) .'</td><td>庫存：'. $productTable[$i]['productStock'] .'</td></tr>';
						print '<tr bgcolor="white" align="center"><td colspan="2">'. $productTable[$i]['productAbstract'] .'</td></tr>';
						print '</table>';
					}
					
					print '</td>';

					if ($i % 3 == 2)
					{
						print '</tr>';
					}
				}
				?>
				<tr>
					<td colspan="2" align="right">
					<?php
					if ($pageNo != 1)
					{
						echo '<a href="product.php?page='. ($pageNo - 1) .'">上一頁</a>';
					}

					if ($pageNo != $pageTotal)
					{
						echo '<a href="product.php?page='. ($pageNo + 1) .'">下一頁</a>';
					}
					?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>