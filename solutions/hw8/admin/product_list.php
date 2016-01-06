<?php
include ('check.php');
?>

<html>
<head>
<title>admin - product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>商品管理</h1>

<?php
include ('bar.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的資料總量
$result = mysql_query("SELECT * FROM product;", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 10;									// 每 10 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM product LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);

mysql_close($link_ID);

?>

<a href="product_add.php">新增</a>

<br><br>

<table width="750" border="1">
	<tr align="center">
		<td width="150">管理</td>
		<td width="150">名稱</td>
		<td width="300">摘要</td>
		<td width="100">售價</td>
		<td width="50">圖片</td>
	</tr>

	<?php
	while ($record = mysql_fetch_array($result))
	{
		echo '<tr>';
		echo '<td><a href="product_edit.php?no='. $record['productNo'] .'">修改</a> / <a href="product_delete.php?no='. $record['productNo'] .'">刪除</a></td>';
		echo '<td>' . $record['productName'] . '</td>';
		echo '<td>' . $record['productAbstract'] . '</td>';
		echo '<td>' . $record['productPrice'] . '</td>';
		echo '<td><a href="product_pic.php?no='. $record['productNo'] .'">圖</a></td>';
		echo '</tr>';
	}
	?>

</table>

<?php
if ($pageNo != 1)
{
	echo '<a href="product_list.php?page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="product_list.php?page='. ($pageNo + 1) .'">下一頁</a>';
}
?>

</body>
</html>
