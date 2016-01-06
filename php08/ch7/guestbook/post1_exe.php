<?php
//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 寫入留言到資料庫
mysql_query("INSERT INTO guestbook1 (guestbookName, guestbookEmail, guestbookContent, guestbookDatetime) VALUES ('". $_POST['guestbookName'] ."', '". $_POST['guestbookEmail'] ."', '". $_POST['guestbookContent'] ."', NOW()); ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: guestbook1.php');

?>