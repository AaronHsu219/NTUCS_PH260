<?php
include ('manager.php');

if ($_POST['id'] == $id && $_POST['pw'] == $pw)
{
	setCookie('id', $id);
	setCookie('pw', $pw);
	header('Location: board2.php');
}
else
{
	echo '帳號密碼錯誤！';
	exit;
}

?>
