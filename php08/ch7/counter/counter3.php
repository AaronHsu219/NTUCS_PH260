<html>
<head>
<title>Example3 - counter3</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例3 - 加強版計數器</h1>

<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用ch7資料庫
mysql_select_db('ch7');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT counter, ipAddress FROM counter3;", $link_ID);

$record = mysql_fetch_array($result);

// 取得目前瀏覽者的 IP address
$currentUser = getenv('REMOTE_ADDR');

// 若上一次的使用者 ($record['ipAddress']) 和目前的使用者 ($currentUser)
// 兩者不同的話才做更新計數器值的動作
if ($record['ipAddress'] != $currentUser)
{
	// 更新計數器值
	mysql_query("UPDATE counter3 SET counter='" . (++$record['counter']) . "', ipAddress = '". $currentUser ."' ; ", $link_ID);
}

//關閉資料庫連接
mysql_close($link_ID);
?>

你是第 <font color="red"><?php echo $record['counter']?></font> 位訪客

</body>
</html>