<?php
/*echo '$_GET[\'no\'] = ' . $_GET['no'] . '<br>';
echo "DELETE FROM guestbook3 WHERE guestbookNo = '". $_GET['no'] ."'; ";
exit;*/

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 刪除留言
mysql_query("DELETE FROM guestbook3 WHERE guestbookNo = '". $_GET['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: guestbook3.php');

?>