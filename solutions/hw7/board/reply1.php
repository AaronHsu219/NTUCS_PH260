<?php
//echo "INSERT INTO board1 (boardType, boardTopic, boardAuthor, boardContent, boardDatetime) VALUES ('". $_POST['no'] ."', '', '". $_POST['boardAuthor'] ."', '". $_POST['boardContent'] ."', NOW()); ";
//exit;

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch7');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 寫入留言到資料庫
mysql_query("INSERT INTO board1 (boardType, boardTopic, boardAuthor, boardContent, boardDatetime) VALUES ('". $_POST['no'] ."', '', '". $_POST['boardAuthor'] ."', '". $_POST['boardContent'] ."', NOW()); ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: view1.php?no=' . $_POST['no']);

?>
