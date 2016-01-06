<?php
include ('check.php');
include ('member_only.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 確認是否有訂電子報
$epaper = ($_POST['memberEpaper']) ? 1 : 0;

// 更新內容
mysql_query("UPDATE member SET memberName = '". $_POST['memberName'] ."', memberPW = '". $_POST['memberPW'] ."', memberEmail = '". $_POST['memberEmail'] ."', memberAddress = '". $_POST['memberAddress'] ."', memberEpaper = '". $epaper ."' WHERE memberID = '". $_COOKIE['memberID'] ."' AND memberPW = '". $_COOKIE['memberPW'] ."' ; ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

// 別忘了把 cookie 中的密碼欄位更新
setCookie('memberPW', $_POST['memberPW']);

header('Location: index.php');

?>
