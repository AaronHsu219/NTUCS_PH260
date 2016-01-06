<?php
include ('check.php');
?>

<html>
<head>
<title>admin - member</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>會員管理</h1>

<?php
include ('bar.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 先取得目前的資料總量
$result = mysql_query("SELECT * FROM member;", $link_ID);
$total = mysql_num_rows($result);

/******************************************************************/
// 分頁程式
$pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];	// 現在在第幾頁
$pageSplit = 10;									// 每 10 筆分為 1 頁
$pageTotal = ceil($total / $pageSplit);
$pageStart = ($pageNo * $pageSplit) - $pageSplit;
/******************************************************************/

// 使用 LIMIT 關鍵字協助分頁
$result = mysql_query("SELECT * FROM member LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);

mysql_close($link_ID);

?>

<table width="700" border="1">
	<tr align="center">
		<td width="150">管理</td>
		<td width="150">姓名</td>
		<td width="100">帳號</td>
		<td width="200">Email</td>
		<td width="100">電子報</td>
	</tr>

	<?php
	while ($record = mysql_fetch_array($result))
	{
		$epaer = ($record['memberEpaper']) ? '訂閱' : '無';
		echo '<tr>';
		echo '<td><a href="member_edit.php?no='. $record['memberNo'] .'">修改</a> / <a href="javascript: if(confirm(\'是否確定刪除？\')) {location.href=\'member_delete.php?no='. $record['memberNo'] .'\';}">刪除</a></td>';
		echo '<td>' . $record['memberName'] . '</td>';
		echo '<td>' . $record['memberID'] . '</td>';
		echo '<td>' . $record['memberEmail'] . '</td>';
		echo '<td>' . $epaer . '</td>';
		echo '</tr>';
	}
	?>

</table>

<?php
if ($pageNo != 1)
{
	echo '<a href="member_list.php?page='. ($pageNo - 1) .'">上一頁</a>';
}

if ($pageNo != $pageTotal)
{
	echo '<a href="member_list.php?page='. ($pageNo + 1) .'">下一頁</a>';
}
?>

</body>
</html>
