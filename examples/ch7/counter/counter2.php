<html>
<head>
<title>Example2 - counter2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例2 - 圖像計數器2</h1>

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

$counter_img = '';

$counter = strval($record['counter']);

for ($i = 0; $i < strlen($counter); $i++)
{
	$counter_img .= '<img src="'. substr($counter, $i, 1) .'.gif">';
}
?>

你是第 <font color="red"><?php echo $counter_img?></font> 位訪客

</body>
</html>