<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PT5-3</title>
</head>
<body>

<?php 

$id = 'allan';
$pw = '1234';

if ($_POST['userid'] == $id && $_POST['userpw'] == $pw) {
	setcookie('id', $_POST['userid'], date('U') + 40);
	setcookie('pw', $_POST['userpw'], date('U') + 40);
	echo '首次登入';
} elseif ($_COOKIE['id'] == $id && $_COOKIE['pw'] == $pw) {
	echo '曾經登入成功過，且cookie未失效!';
} else {
	echo '帳號密碼錯誤，或登入cookie已失效!';
}


?>

</body>
</html>
