<?php
if ($_POST['id'] && $_POST['pw'])
{
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('ch8');
	$checkadmin =mysql_num_rows( mysql_query("SELECT * FROM admin WHERE adminID = '". $_POST['id'] ."' AND adminPW = '". $_POST['pw'] ."' ;", $link_ID) );

	if ($checkadmin)
	{
		setCookie('id', $_POST['id']);
		setCookie('pw', $_POST['pw']);
		header('Location: admin.php');
	}
	else
	{
		echo '登入失敗，請檢查帳號密碼。';
	}
}
else
{
	echo '帳號和密碼均需填寫。';
}

?>
