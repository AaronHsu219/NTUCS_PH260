<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 更新內容
mysql_query("UPDATE admin SET adminID = '". $_POST['adminID'] ."', adminPW = '". $_POST['adminPW'] ."' WHERE adminNo = '". $_POST['no'] ."'; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: admin_list.php');

?>
