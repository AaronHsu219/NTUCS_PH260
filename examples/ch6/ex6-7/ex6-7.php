<html>
<head>
<title>update的使用範例 - ex6-7</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
//判斷是否有輸入編號與職業的 input 欄位
if ($_POST['customersNo'] && $_POST['customersJob'])
{
	//連接MySQL伺服器
	$link_ID = mysql_connect('localhost','root','student');

	//使用bookstore資料庫
	mysql_select_db('bookstore');

	//使用 UTF8 編碼
	mysql_query('SET CHARACTER SET UTF8;');

	//設定查詢字串，將輸入的編號在資料表比對後、更新職業的值
	mysql_query("UPDATE customers SET customersJob='" . $_POST['customersJob'] . "' WHERE customersNo='" . $_POST['customersNo'] . "'; ", $link_ID);

	//關閉資料庫連接
	mysql_close($link_ID);

	echo '修改完成！<a href="../ex6-5/ex6-5.php">觀看客戶列表</a>';
}
else
{
	echo '編號與職業欄都必須填寫！<a href="javascript:go(-1);">回上一頁填寫</a>';
}

?>
</body>
</html>