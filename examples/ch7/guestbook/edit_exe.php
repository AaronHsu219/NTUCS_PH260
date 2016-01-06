<?php
/*echo "UPDATE guestbook3 SET guestbookName = '". $_POST['guestbookName'] ."', guestbookEmail = '". $_POST['guestbookEmail'] ."', guestbookContent = '". $_POST['guestbookContent'] ."' WHERE guestbookNo = '". $_POST['no'] ."'; ";
exit;*/

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 刪除留言
mysql_query("UPDATE guestbook3 SET guestbookName = '". $_POST['guestbookName'] ."', guestbookEmail = '". $_POST['guestbookEmail'] ."', guestbookContent = '". $_POST['guestbookContent'] ."' WHERE guestbookNo = '". $_POST['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: guestbook3.php');

?>