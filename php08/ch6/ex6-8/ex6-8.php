<html>
<head>
<title>delete的使用範例</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
//下面if敘述將判斷輸入的姓名是否存在於資料庫中
//若存在於資料庫則執行刪除資料的動作
if ($_POST['customersName'])
{
	//連接MySQL伺服器
	$link_ID = mysql_connect('localhost','root','student');

	//使用bookstore資料庫
	mysql_select_db('bookstore');

	//使用 UTF8 編碼
	mysql_query('SET CHARACTER SET UTF8;');

	//設定查詢字串，將輸入的姓名在資料表比對後刪除該筆記錄
	$a = mysql_query("DELETE FROM customers WHERE customersName = '" . $_POST['customersName'] . "'; ", $link_ID);

	//關閉與資料庫的連接
	mysql_close($link_ID);

	echo $_POST['customersName'] . '已被刪除！<a href="../ex6-5/ex6-5.php">觀看客戶列表</a>';
}
else
{
	echo '姓名欄必須填寫！<a href="javascript:go(-1);">回上一頁填寫</a>';
}
?>
</body>
</html>