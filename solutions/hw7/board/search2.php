<?php
include ('highlight.php');

if ($_POST['keyword'] == '')
{
	header('Location: board2.php');
}

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');
mysql_query("SET CHARACTER SET UTF8;");

$result = mysql_query("SELECT * FROM board1 WHERE boardType = 0 AND (boardTopic LIKE '%". $_POST['keyword'] ."%' OR boardAuthor LIKE '%". $_POST['keyword'] ."%') ;", $link_ID);
$check = mysql_num_rows($result);
if (!$check)
{
	echo '抱歉，沒有相關的內容！<a href="board2.php">回上一頁</a>';
	exit;
}
?>
<html>
<head>
<title>回家作業7 - 具分頁及管理功能的討論區</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>回家作業7 - 討論區搜尋結果頁</h1>

<a href="post1.php">發表新主題</a><br><br>

<form method="POST" action="search2.php">
搜尋主題或作者：<input type="text" name="keyword" value="<?php echo $_POST['keyword']?>"><input type="submit" value="搜尋">
</form>
<br>

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
		echo '<td><a href="view1.php?no='. $record['boardNo'] .'">' . highlight_keyword($record['boardTopic'], $_POST['keyword']) . '</a></td>';
		echo '<td>' . highlight_keyword($record['boardAuthor'], $_POST['keyword']) . '</td>';
		echo '<td>' . $record['boardDatetime'] . '</td>';

		// 取出最後回應時間
		$lastReply = mysql_query("SELECT boardDatetime FROM board1 WHERE boardType = '". $record['boardNo'] ."' ORDER BY boardDatetime DESC LIMIT 1;", $link_ID);
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
