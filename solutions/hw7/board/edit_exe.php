<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 刪除留言
mysql_query("UPDATE board1 SET boardTopic = '". $_POST['boardTopic'] ."', boardAuthor = '". $_POST['boardAuthor'] ."', boardContent = '". $_POST['boardContent'] ."' WHERE boardNo = '". $_POST['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: board2.php');

?>
