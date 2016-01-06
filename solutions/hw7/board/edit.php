<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM board1 WHERE boardNo = '". $_GET['no'] ."' ;", $link_ID);

$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>回家作業7 - 具分頁及管理功能的討論區</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>回家作業7 - 討論區修改內容</h1>

<form method="POST" action="edit_exe.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
主題：<input type="text" name="boardTopic" value="<?php echo $record['boardTopic']?>"><br>
作者：<input type="text" name="boardAuthor" value="<?php echo $record['boardAuthor']?>"><br>
內容：<textarea name="boardContent"><?php echo $record['boardContent']?></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>
