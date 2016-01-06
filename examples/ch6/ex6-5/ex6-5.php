<html>
<head>
<title>多筆查詢結果的使用範例 - ex6-5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost','root','student');

//指定使用bookstore資料庫
mysql_select_db('bookstore');

//使用 UTF8 編碼
mysql_query('SET CHARACTER SET UTF8;');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT * FROM customers ORDER BY customersNo; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);
?>
<div align="center">
<h2>客戶資料列表</h2>
<hr>
<table align="center" border="1">
	<tr align="center">
		<td>編號</td>
		<td width="100">姓名</td>
		<td width="120">職業</td>
	</tr>
	<?php
	//設定迴圈，執行一次印出一row
	while($record = mysql_fetch_array($result))
	{
	?>
	<tr align="center">
		<td><?php echo $record['customersNo']?></td>
		<td width="100"><?php echo $record['customersName']?></td>
		<td width="120"><?php echo $record['customersJob']?></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
</body>
</html>