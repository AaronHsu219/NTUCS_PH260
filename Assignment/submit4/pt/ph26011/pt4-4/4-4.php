<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>4-4.php</title>
</head>
<body>
<?php 

$id = 'allan';
$pw = '111111';

if (strlen($_POST['var_PW']) < 6) {
	echo 'password should be longer than 6 characters.';
}
elseif (strlen($_POST['var_PW']) > 12){
	echo 'password should be shorter than 12 characters.';
}
else{
	if ($id == trim(strtolower($_POST['var_ID'])) && $pw == $_POST['var_PW'] ){
		echo "welcome Allan!";
	} 
	else{
		echo "access denied";
	}
}

?>
</body>
</html>


