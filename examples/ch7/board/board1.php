<html>
<head>
<title>Example8 - board1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例8 - 討論區主程式</h1>

<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');
mysql_query("SET CHARACTER SET UTF8;");

$result = mysql_query("SELECT * FROM board1 WHERE boardType = '0';", $link_ID);
?>

<a href="post1.php">發表新主題</a><br><br>

<table width="700" border="1">
	<tr align="center" bgcolor="#CCCCCC">
		<td>主題</td>
		<td>發表人</td>
		<td>發表時間</td>
		<td>最新回應時間</td>
		<td>回應數</td>
	</tr>
	<?php
	while ($record = mysql_fetch_array($result))
	{
		echo '<tr>';
		echo '<td><a href="view1.php?no='. $record['boardNo'] .'">' . $record['boardTopic'] . '</a></td>';
		echo '<td>' . $record['boardAuthor'] . '</td>';
		echo '<td>' . $record['boardDatetime'] . '</td>';

		// 取出最後回應時間
		$lastReply = mysql_query("SELECT boardDatetime FROM board1 WHERE boardType = '". $record['boardNo'] ."' ORDER BY boardDatetime DESC LIMIT 0, 1;", $link_ID);
		$lastReplyDatetime = mysql_fetch_array($lastReply);
		echo '<td>' . $lastReplyDatetime['boardDatetime'] . '</td>';

		// 計算回應數
		$replyCount = mysql_num_rows(mysql_query("SELECT * FROM board1 WHERE boardType = '". $record['boardNo'] ."';", $link_ID));
		echo '<td>' . $replyCount . '</td>';

		echo '</tr>';
	}

	// 用完再關閉連線
	mysql_close($link_ID);
	?>
</table>

</body>
</html>