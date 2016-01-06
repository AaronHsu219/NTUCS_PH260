<?php
include ('check.php');
?>

<html>
<head>
<title>admin - news</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>最新訊息</h1>

<?php
include ('bar.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的資料總量
$result = mysql_query("SELECT * FROM news;", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 10;									// 每 10 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM news ORDER BY newsDate DESC LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);

mysql_close($link_ID);

?>

<a href="news_add.php">新增</a>

<br><br>

<table width="700" border="1">
	<tr align="center">
		<td width="150">管理</td>
		<td width="500">標題</td>
		<td width="150">發表日期</td>
	</tr>

	<?php
	while ($record = mysql_fetch_array($result))
	{
		echo '<tr>';
		echo '<td><a href="news_edit.php?no='. $record['newsNo'] .'">修改</a> / <a href="news_delete.php?no='. $record['newsNo'] .'">刪除</a></td>';
		echo '<td>' . $record['newsSubject'] . '</td>';
		echo '<td>' . $record['newsDate'] . '</td>';
		echo '</tr>';
	}
	?>

</table>

<?php
if ($pageNo != 1)
{
	echo '<a href="news_list.php?page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="news_list.php?page='. ($pageNo + 1) .'">下一頁</a>';
}
?>

</body>
</html>
