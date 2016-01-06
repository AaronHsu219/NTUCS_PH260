<html>
<head>
<title>取得查詢資料筆數的使用範例 - ex6-4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2 align="center">客戶資料查詢結果</h2>
<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用bookstore資料庫
mysql_select_db('bookstore');

//使用 UTF8 編碼
mysql_query('SET CHARACTER SET UTF8;');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT * FROM customers WHERE customersJob='" . $_POST['customersJob'] . "'; ", $link_ID);

//計算符合查詢結果的資料筆數
$count = mysql_num_rows($result);

//關閉資料庫連接
mysql_close($link_ID);

if ($count == 0)
{
	echo '目前沒有職業為「'. $_POST['customersJob'] .'」的客戶！';
}
else
{
	echo '職業為「'. $_POST['customersJob'] .'」的資料共 <font color="red">' . $count . '</font> 筆<br>';
}
?>
</body>
</html>