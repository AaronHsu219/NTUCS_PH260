<?php
include ('password.php');

if ($_POST['id'] == $admin['id'] && $_POST['pw'] == $admin['pw'])
{
	setCookie('id', $admin['id']);
	setCookie('pw', $admin['pw']);
	header('Location: admin.php');
}
else
{
	echo '登入失敗，請檢查帳號密碼。<a href="index.php">重新登入</a>';
	exit;
}
?>
