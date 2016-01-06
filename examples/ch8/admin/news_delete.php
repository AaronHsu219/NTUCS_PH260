<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

#echo "DELETE FROM news WHERE newsNo = '". $_GET['no'] ."'; ";
#exit;

// 刪除留言
mysql_query("DELETE FROM news WHERE newsNo = '". $_GET['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: news_list.php');

?>