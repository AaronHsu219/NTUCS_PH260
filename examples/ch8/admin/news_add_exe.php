<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 寫入留言到資料庫

#echo "INSERT INTO news (newsSubject, newsContent, newsDate) VALUES ('". $_POST['newsSubject'] ."', '". $_POST['newsContent'] ."', CURDATE()); ";
#exit;

mysql_query("INSERT INTO news (newsSubject, newsContent, newsDate) VALUES ('". $_POST['newsSubject'] ."', '". $_POST['newsContent'] ."', CURDATE()); ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: news_list.php');

?>