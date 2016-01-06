<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 刪除討論主題
mysql_query("DELETE FROM board1 WHERE boardNo = '". $_GET['no'] ."'; ", $link_ID);

// 除此之外，也得刪除該主題下的回覆
mysql_query("DELETE FROM board1 WHERE boardType = '". $_GET['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: board2.php');

?>
