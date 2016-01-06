<?php
include ('password.php');

$check = FALSE;

if ($_COOKIE['id'] == $admin['id'] && $_COOKIE['pw'] == $admin['pw'])
{
	$check = TRUE;
}

if ($check == FALSE)
{
	echo 'access dinied';
	exit;
	//header('Location: index.php');
}
?>