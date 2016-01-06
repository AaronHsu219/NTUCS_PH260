<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>output</title>
</head>
<body>
<?php
$userA = 'allan';
$pwdA = 1234;
$userB = 'bill';
$pwdB = 5678;

if ($_POST['var_user'] == $userA && $_POST['var_pwd']  == $pwdA) {
	echo "登入成功";
}
elseif ($_POST['var_user']  == $userB && $_POST['var_pwd'] == $pwdB) {
	echo "登入成功";
}
else
{
	echo "登入失敗";
}

*/?>
</body
</html>