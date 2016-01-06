<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>4-5.php</title>
</head>
<body>
<?php 
$num = $_POST['var_input'];

if (is_numeric($num) == false) {
	echo 'please insert a number';
	exit;
}
else{
	echo "Input:".$_POST['var_input']."<br>";
	echo "abs:".abs($_POST['var_input'])."<br>";
	echo "round: ".round($_POST['var_input'])."<br>";
	echo "ceil: ".ceil($_POST['var_input'])."<br>";
	echo "floor: ".floor($_POST['var_input'])."<br>";	
}


?>
</body>
</html>

