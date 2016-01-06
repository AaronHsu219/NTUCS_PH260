<html>
<head>
<title>Example6 - guestbook2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>範例6 - 有分頁功能的留言板主程式</h1>

<?php
$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的留言總量
$result = mysql_query("SELECT * FROM guestbook2;", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 2;		// 每 2 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM guestbook2  ORDER BY guestbookNo LIMIT ". $pageStart .", ". $pageSplit .";", $link_ID);

//echo "SELECT * FROM guestbook2 LIMIT ". $pageStart .", ". $pageSplit ." ;";

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

if ($pageNo != 1)
{
	echo '<a href="guestbook2.php?page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="guestbook2.php?page='. ($pageNo + 1) .'">下一頁</a>';
}
?>

</body>
</html>