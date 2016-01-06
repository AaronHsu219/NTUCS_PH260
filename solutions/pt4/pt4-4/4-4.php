<?php
$id = 'allan';
$pw = '111111';

if (strlen($_POST['pw']) < 6)
{
	echo 'password should be greater than 6 characters.';
}
elseif (strlen($_POST['pw']) > 12)
{
	echo 'password should be less than 12 characters.';
}
else
{
	if ($id == trim(strtolower($_POST['id'])) && $pw == $_POST['pw'])
	{
		echo 'welcome Allan!';
	}
	else
	{
		echo 'access denied';
	}
}

?>