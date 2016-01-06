<?php
if ($_POST['memberID'] && $_POST['memberPW'])
{
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('ch8');
	$checkMember =mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_POST['memberID'] ."' AND memberPW = '". $_POST['memberPW'] ."' ;", $link_ID) );

	if ($checkMember)
	{
		setCookie('memberID', $_POST['memberID']);
		setCookie('memberPW', $_POST['memberPW']);
		header('Location: index.php');
	}
	else
	{
		echo '登入失敗，請檢查帳號密碼。或<a href="register.php">按此註冊新帳號</a>。';
	}
}
else
{
	echo '帳號和密碼均需填寫。';
}
?>
