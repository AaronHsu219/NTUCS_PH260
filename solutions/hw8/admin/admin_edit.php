<?php
include ('check.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM admin WHERE adminNo = '". $_GET['no'] ."' ;", $link_ID);
$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>

<html>
<head>
<title>admin - admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>權限管理</h1>

<form method="POST" action="admin_edit_exe.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
管理者ID：<input type="text" name="adminID" value="<?php echo $record['adminID']?>"><br>
管理者PW<input type="text" name="adminPW" value="<?php echo $record['adminPW']?>"><br>
<input type="submit" value="送出">
</form>

</body>
</html>