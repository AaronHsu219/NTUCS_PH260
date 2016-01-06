<html>
<head>
<title>insert的使用範例 - ex6-6</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
//判斷姓名及職業欄位是否有輸入
if ($_POST['customersName'] && $_POST['customersJob'])
{
	//連接MySQL伺服器
	$link_ID = mysql_connect('localhost','root','student');

	//使用bookstore資料庫
	mysql_select_db('bookstore');

	//使用 UTF8 編碼
	mysql_query('SET CHARACTER SET UTF8;');

	//送出查詢字串
	mysql_query("INSERT INTO customers (customersName, customersJob) VALUES ('". $_POST['customersName'] ."','". $_POST['customersJob'] ."'); ", $link_ID);

	//關閉資料庫連接
	mysql_close($link_ID);
	
	echo '新增完成！<a href="../ex6-5/ex6-5.php">觀看客戶列表</a>';
}
else
{
	echo '姓名與職業欄都必須填寫！<a href="javascript:go(-1);">回上一頁填寫</a>';
}
?>
</body>
</html>