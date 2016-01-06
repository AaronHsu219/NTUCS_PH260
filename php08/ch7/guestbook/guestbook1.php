<html>
<head>
<title>Example5 - guestbook1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例5 - 留言板主程式</h1>

<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

$result = mysql_query("SELECT * FROM guestbook1;", $link_ID);

mysql_close($link_ID);
?>

<a href="post1.php">新增留言</a><br><br>

<?php
while ($record = mysql_fetch_array($result))
{
	echo '<table width="500" border="1">';
	echo '<tr><td>';
	echo $record['guestbookName'];
	if ($record['guestbookEmail'])
	{
		echo ' &lt;<a href="mailto:'. $record['guestbookEmail'] .'">'. $record['guestbookEmail'] .'</a>&gt;';
	}
	echo '<font size="-2"> ('. $record['guestbookDatetime'] .') </font>';
	echo '</td></tr>';
	echo '<tr><td>'. str_replace("\n", '<br>', $record['guestbookContent']) .'</td></tr>';
	echo '</table><br>';
}
?>

</body>
</html>