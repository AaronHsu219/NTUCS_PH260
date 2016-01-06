<?php
if (isset($_GET['no']) == FALSE)
{
	header('Location: board2.php');
}

include ('manager.php');

$check = FALSE;

if (isset($_COOKIE['id']) && isset($_COOKIE['pw']))
{
	if ($_COOKIE['id'] == $id && $_COOKIE['pw'] == $pw)
	{
		$check = TRUE;
	}
}

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');
mysql_query("SET CHARACTER SET UTF8;");

$result = mysql_query("SELECT * FROM board1 WHERE boardNo = '". $_GET['no'] ."' ;", $link_ID);
$record = mysql_fetch_array($result);
?>
<html>
<head>
<title>回家作業7 - 具分頁及管理功能的討論區</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>回家作業7 - 討論區瀏覽頁</h1>

<a href="board2.php">回到主頁</a><br><br>

<table width="500" border="1">
	<tr align="center" bgcolor="#CCCCCC">
		<td>
			<?php echo $record['boardTopic']?> - (作者: <?php echo $record['boardAuthor']?>)
			<?php
			if ($check)
			{
				echo '<br><a href="edit.php?no='. $record['boardNo'] .'">修改</a>│<a href="delete.php?no='. $record['boardNo'] .'">刪除</a>';
			}
			?>
		</td>
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
// 先取得目前的留言總量
$result = mysql_query("SELECT * FROM board1 WHERE boardType = '". $_GET['no'] ."';", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 1;		// 每 10 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM board1 WHERE boardType = '". $_GET['no'] ."' LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);

$num = $pageStart;

while ($record = mysql_fetch_array($result))
{
	echo '<table width="500" border="1">';
	echo '<tr align="center" bgcolor="#CCCCCC">';
	echo '<td>';
	echo '回應 '. ++$num .' - (作者: '. $record['boardAuthor'] .')';
	if ($check)
	{
		echo '<br><a href="edit2.php?no='. $record['boardNo'] .'&type='. $record['boardType'] .'">修改</a>│<a href="delete.php?no='. $record['boardNo'] .'">刪除</a>';
	}
	echo '</td>';
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
<?php
if ($pageNo != 1)
{
	echo '<a href="view1.php?no='.$_GET['no'].'&page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="view1.php?no='.$_GET['no'].'&page='. ($pageNo + 1) .'">下一頁</a>';
}
?>
<br>

發表回應:<br>

<form method="POST" action="reply1.php">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
作者：<input type="text" name="boardAuthor"><br>
內容：<textarea name="boardContent"></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>
