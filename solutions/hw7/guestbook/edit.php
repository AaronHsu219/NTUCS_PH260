<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM guestbook3 WHERE guestbookNo = '". $_GET['no'] ."' ;", $link_ID);

$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>Example7 - guestbook3</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>回家作業7 - 留言板修改留言</h1>

<form method="POST" action="edit_exe.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
<!--no = <input type="text" name="no" value="<?php echo $_GET['no']?>"><br>-->
訪客姓名：<input type="text" name="guestbookName" value="<?php echo $record['guestbookName']?>"><br>
訪客email：<input type="text" name="guestbookEmail" value="<?php echo $record['guestbookEmail']?>"><br>
訪客內容：<textarea name="guestbookContent"><?php echo $record['guestbookContent']?></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>
