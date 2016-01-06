<?php
include ('check.php');
include ('member_only.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM member WHERE memberID = '". $_COOKIE['memberID'] ."' AND memberPW = '". $_COOKIE['memberPW'] ."' ;", $link_ID);

$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>admin - member</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>會員管理</h1>

<form method="POST" action="edit_exe.php">
姓名：<input type="text" name="memberName" value="<?php echo $record['memberName']?>"><br>
帳號：<?php echo $record['memberID']?><br>
密碼：<input type="text" name="memberPW" value="<?php echo $record['memberPW']?>"><br>
信箱：<input type="text" name="memberEmail" size="50" value="<?php echo $record['memberEmail']?>"><br>
地址：<input type="text" name="memberAddress" size="50" value="<?php echo $record['memberAddress']?>"><br>
訂報：<input type="checkbox" name="memberEpaper" value="1"<?php echo ($record['memberEpaper']) ? ' checked' : '' ?>><br>
<input type="submit" value="送出">
</form>

</body>
</html>