<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>

<?php 
include('user.php');
include('verify.php');

$check = verify($_POST['ID'] ,$_POST['PW'] ,$user ,$userData );

if ($check) {
	echo '你的email為:'.$check;
} else {	
	echo 'Access Denied.';
}

?>

</body>
</html>