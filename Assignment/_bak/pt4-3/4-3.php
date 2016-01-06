<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>4-3.php</title>
</head>
<body>
<?php 
$id = 'allan';
$pw = '1111';

if ($id == trim(strtolower($_POST['var_ID'])) && $pw == $_POST['var_PW'] ){
	echo "welcome Allan!";
} 
else{
	echo "access denied";
}
?>
</body>
</html>


