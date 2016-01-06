<html>
<head>
<title>以陣列傳回查詢資料的範例 - ex6-2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2 align="center">客戶資料查詢結果 (使用 mysql_fetch_array)</h2>
<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用bookstore資料庫
mysql_select_db('bookstore');

//使用 UTF8 編碼
mysql_query('SET CHARACTER SET UTF8;');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT * FROM customers WHERE customersName='" . $_POST['customersName'] . "';", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

//取得查詢結果，以陣列傳回，放在$record
$record = mysql_fetch_array($result);

// $record['customersNo'] = customersNo 中的資料
// $record['customersName'] = customersName 中的資料
// $record['customersJob'] = customersJob 中的資料

// 若取回的陣列為空陣列，即表示找不到這個人
// 即 $record == false
// 或是 !$record ($record 若為 false 被 not 後則為 true)
if (!$record)
{
	echo '查無此人！';
}
else
{
	echo '主鍵編號：' . $record['customersNo'] . '<br>';
	echo '客戶姓名：' . $record['customersName'] . '<br>';
	echo '客戶職業：' . $record['customersJob'] . '<br>';
}
?>
</body>
</html>