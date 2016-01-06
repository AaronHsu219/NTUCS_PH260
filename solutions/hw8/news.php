<?php
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
$result = mysql_query("SELECT * FROM news LIMIT ". $pageStart .", ". $pageSplit ." ;", $link_ID);

mysql_close($link_ID);
?>

<html>
<head>
<title>最新訊息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<table width="900" border="0">
	<tr>
		<td width="50%" bgcolor="#EEEEEE">
			<h1><i>PHP 網路商城</i></h1>
		</td>
		<td>
			<?php include ('member.php'); ?>
		</td>
	</tr>
</table>

<table width="900" border="0">
	<tr>
		<td width="250">
			<?php include ('bar.php'); ?>
		</td>
		<td>
			<table width="100%" border="1">
				<tr align="center">
					<td width="80%">標題</td>
					<td width="20%">發表日期</td>
				</tr>
				<?php
				while ($record = mysql_fetch_array($result))
				{
					echo '<tr>';
					echo '<td>' . $record['newsSubject'] . '</td>';
					echo '<td>' . $record['newsDate'] . '</td>';
					echo '</tr>';
				}
				?>
			</table>
		</td>
	</tr>
	<tr>
		<td align="right">
		<?php
		if ($pageNo != 1)
		{
			echo '<a href="news.php?page='. ($pageNo - 1) .'">上一頁</a>';
		}

		if ($pageNo != $pageTotal)
		{
			echo '<a href="news.php?page='. ($pageNo + 1) .'">下一頁</a>';
		}
		?>
		</td>
	</tr>
</table>

</body>
</html>