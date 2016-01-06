<html>
<head>
<title>Example4 - counter4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例4 - 簡易流量統計版計數器</h1>

<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定使用ch7資料庫
mysql_select_db('ch7');

//送出查詢，將結果放入$result
$result = mysql_query("SELECT COUNT(*) AS counting FROM counter4;", $link_ID);

$record = mysql_fetch_array($result);

// 取得目前瀏覽者的 IP address
$currentUser = getenv('REMOTE_ADDR');

// 更新計數器值
mysql_query("INSERT INTO counter4 (counterDate, counterTime, counterIPAddress) VALUES (CURDATE(), CURTIME(), '". $currentUser ."') ; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);
?>

你是第 <font color="red"><?php echo ($record['counting'] + 1)?></font> 位訪客

</body>
</html>