<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 抓出有哪些人訂了電子報
$result = mysql_query("SELECT memberEmail FROM member WHERE memberEpaper = '1' ;", $link_ID);

// 設定 HTML 格式的郵件標頭
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: 電子報發信系統 <epaper@example.com>' . "\r\n";

$num = 0;
while ($record = mysql_fetch_array($result))
{
	mail($record['memberEmail'], $_POST['epaperSubject'], $_POST['epaperContent'], $headers);
	++$num;
}

//關閉資料庫連接
mysql_close($link_ID);

echo '送發完畢，共送了 '. $num .' 份電子報。<a href="admin.php">回管理首頁</a>';

?>
