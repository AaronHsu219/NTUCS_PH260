<?php
include ('manager.php');

$check = FALSE;

if (isset($_COOKIE['id']) && isset($_COOKIE['pw']))
{
	if ($_COOKIE['id'] == $id && $_COOKIE['pw'] == $pw)
	{
		$check = TRUE;
	}
}
?>

<html>
<head>
<title>回家作業7 - 具分頁及管理功能的討論區主程式</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>回家作業7 - 具分頁及管理功能的討論區主程式</h1>

<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的留言總量
$result = mysql_query("SELECT * FROM board1 WHERE boardType = '0';", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 20;		// 每 20 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM board1 WHERE boardType = '0' LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);
?>

<a href="post1.php">發表新主題</a><br><br>
<a href="admin.php">管理討論區</a><br><br>

<form method="POST" action="search2.php">
搜尋主題或內容：<input type="text" name="keyword"><input type="submit" value="搜尋">
</form>
<br>

<table width="700" border="1">
	<tr align="center" bgcolor="#CCCCCC">
		<?php
		################################
		if ($check)
		{
			echo '<td>管理</td>';
		}
		################################
		?>
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
		################################
		if ($check)
		{
			echo '<td><a href="edit.php?no='. $record['boardNo'] .'">修改</a>│<a href="delete.php?no='. $record['boardNo'] .'">刪除</a></td>';
		}
		################################
		
		echo '<td><a href="view1.php?no='. $record['boardNo'] .'">' . $record['boardTopic'] . '</a></td>';
		echo '<td>' . $record['boardAuthor'] . '</td>';
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

<?php
if ($pageNo != 1)
{
	echo '<a href="board2.php?page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="board2.php?page='. ($pageNo + 1) .'">下一頁</a>';
}
?>

</body>
</html>
