<?php
if (!$_GET['no'])
{
	header('Location: index.php');
}

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM product WHERE productNo = '". $_GET['no'] ."' ;", $link_ID);

$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>最新訊息</title>
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
			<table width="600" border="1">
				<tr>
					<td>商品名稱：</td>
					<td><?php echo $record['productName']?></td>
				</tr>
				<tr>
					<td>商品售價：</td>
					<td><?php echo '$' . number_format($record['productPrice'])?></td>
				</tr>
				<tr>
					<td>商品庫存：</td>
					<td><?php echo $record['productStock']?></td>
				</tr>
				<tr>
					<td>商品圖片：</td>
					<td><img src="img.php?no=<?php echo $record['productNo']?>" border="0"></td>
				</tr>
				<tr>
					<td>商品敘述：</td>
					<td><?php echo $record['productContent']?></td>
				</tr>
				<tr>
					<td colspan="2" align="center" height="50"><a href="cart.php?no=<?php echo $record['productNo']?>">加入購物車！</a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>