<html>
<head>
<title>Example1 - counter1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例1 - 計數器1</h1>

<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用ch7資料庫
mysql_select_db('ch7');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT counter FROM counter1;", $link_ID);

$record = mysql_fetch_array($result);

// 更新計數器值
mysql_query("UPDATE counter1 SET counter='" . (++$record['counter']) . "' ; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);
?>

你是第 <font color="red"><?php echo $record['counter']?></font> 位訪客

</body>
</html>