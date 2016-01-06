<?php
if (isset($_GET['no']) == FALSE)
{
	header('Location: board1.php');
}

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');
mysql_query("SET CHARACTER SET UTF8;");

$result = mysql_query("SELECT * FROM board1 WHERE boardNo = '". $_GET['no'] ."' ;", $link_ID);
$record = mysql_fetch_array($result);
?>
<html>
<head>
<title>Example8 - board1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例8 - 討論區瀏覽頁</h1>

<a href="board1.php">回到主頁</a><br><br>

<table width="500" border="1">
	<tr align="center" bgcolor="#CCCCCC">
		<td><?php echo $record['boardTopic']?> - (作者: <?php echo $record['boardAuthor']?>)</td>
		<td align="right"><?php echo $record['boardDatetime']?></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo str_replace("\n", '<br>', $record['boardContent'])?>
		</td>
	</tr>
</table>
<br>

<?php
$num = 0;

$result = mysql_query("SELECT * FROM board1 WHERE boardType = '". $_GET['no'] ."' ORDER BY boardDatetime;", $link_ID);

while ($record = mysql_fetch_array($result))
{
	echo '<table width="500" border="1">';
	echo '<tr align="center" bgcolor="#CCCCCC">';
	echo '<td>回應 '. ++$num .' - (作者: '. $record['boardAuthor'] .')</td>';
	echo '<td align="right">' . $record['boardDatetime'] . '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="2">';
	echo str_replace("\n", '<br>', $record['boardContent']);
	echo '</td>';
	echo '</tr>';
	echo '</table><br>';
}

// 用完再關閉連線
mysql_close($link_ID);
?>

發表回應:<br>

<form method="POST" action="reply1.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
作者：<input type="text" name="boardAuthor"><br>
內容：<textarea name="boardContent"></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>