<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>PT4-1 input</title>
</head>

<body>
	<form method="POST" action="output.php">
	請輸入「營業員 A」的營業額：<br>
	<?php
	for ($i = 1; $i <= 100; $i++)
	{
		echo '第'.$i.'個月：<input type="text" name="a_'.$i.'"><br>';
	}
	?>

	<input type="submit">
	</form>
</body>
</html>
