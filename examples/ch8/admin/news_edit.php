<?php
include ('check.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM news WHERE newsNo = '". $_GET['no'] ."' ;", $link_ID);
$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>admin - news</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>最新訊息</h1>

<form method="POST" action="news_edit_exe.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
新聞標題：<input type="text" name="newsSubject" value="<?php echo $record['newsSubject']?>"><br>
新聞內容：<textarea name="newsContent"><?php echo $record['newsContent']?></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>