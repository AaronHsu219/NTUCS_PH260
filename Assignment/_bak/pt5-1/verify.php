<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>verify</title>
</head>

<?php 

function verify($id, $pw, $user, $userData){
	$check = false;
	for ($i = 0; $i < sizeof($user); $i++) { 
		if ($id == $user[$i]) {
			$check = true;
			break;
		}		
	}
	if ($check) {
		if ($pw == $userData[$id]['password']) {
			return $userData[$id]['email'];
		}
	}		
	return false;
}

?>

<body>
</body>
</html>