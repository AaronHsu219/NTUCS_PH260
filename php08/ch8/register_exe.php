<?php
// 確定必填欄位是否有填
if (!$_POST['memberID'] || !$_POST['memberPW'] || !$_POST['memberName'] || !$_POST['memberEmail'])
{
	echo '不行喔，必填欄位都得填喔，麻煩你<a href="register.php">確認一下哪些沒填吧</a>。<br>';
	echo '不行喔，必填欄位都得填喔，麻煩你<a href="javascript: history.back()">確認一下哪些沒填吧</a>。';
	exit;
}

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 檢查一下是否已經有這個使用者了
$checkMember = mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_POST['memberID'] ."' ;", $link_ID) );
if ($checkMember)
{
	echo '抱歉~已經有人叫做 '. $_POST['memberID'] .' 了喔，麻煩你<a href="javascript: history.go(-1)">換個 ID 吧</a>。';
	exit;
}

// 確認是否有訂電子報
$epaper = ($_POST['memberEpaper']) ? 1 : 0;

// 更新內容
mysql_query("INSERT INTO member (memberName, memberID, memberPW, memberEmail, memberAddress, memberEpaper) VALUES ('". $_POST['memberName'] ."', '". $_POST['memberID'] ."', '". $_POST['memberPW'] ."', '". $_POST['memberEmail'] ."', '". $_POST['memberAddress'] ."', '". $epaper ."')");

//關閉資料庫連接
mysql_close($link_ID);

// 直接登入
setCookie('memberID', $_POST['memberID']);
setCookie('memberPW', $_POST['memberPW']);
header('Location: index.php');

?>
