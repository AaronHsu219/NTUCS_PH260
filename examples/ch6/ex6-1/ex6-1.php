<html>
<head>
<title>取得查詢資料的使用範例 - ex6-1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2 align="center">客戶資料查詢結果 (使用 mysql_fetch_row)</h2>
<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用bookstore資料庫
mysql_select_db('bookstore');

//使用 UTF8 編碼
mysql_query('SET CHARACTER SET UTF8;');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT * FROM customers WHERE customersName = '". $_POST['customersName'] ."';", $link_ID);

#echo "SELECT * FROM customers WHERE customersName = '". $_POST['customersName'] ."';<br>";

//關閉資料庫連接
mysql_close($link_ID);

//取得結果，以陣列傳回，放在$record中
$record = mysql_fetch_row($result);

// $record[0] = customersNo 中的資料
// $record[1] = customersName 中的資料
// $record[2] = customersJob 中的資料

// 若取回的陣列為空陣列，即表示找不到這個人
// 即 $record == false
if ($record == false)
{
	echo '查無此人！';
}
else
{
	echo '主鍵編號：' . $record[0] . '<br>';
	echo '客戶姓名：' . $record[1] . '<br>';
	echo '客戶職業：' . $record[2] . '<br>';
}
?>
</body>
</html>