<?php
include ('user.php');
include ('verify.php');

$check = verify($_POST['userid'], $_POST['userpw'], $user, $userData);

if ($check)
{
	echo 'Hi! your email address is: ' . $check;
}
else
{
	echo 'access denied';
}
?>