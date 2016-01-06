<?php
$id = 'allan';
$pw = '1111';

#if ($id == $_POST['id'] && $pw == $_POST['pw'])
if ($id == trim(strtolower($_POST['id'])) && $pw == $_POST['pw'])
{
	echo 'welcome Allan!';
}
else
{
	echo 'access denied';
}
?>