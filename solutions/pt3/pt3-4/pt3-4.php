<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>PT3-4 output</title>
  </head>
  <body>
	<?php
	$userA = 'allan';
	$userB = 'bill';
	$passA = '1234';
	$passB = '5678';
	
	if ($_POST['user'] == $userA && $passA == $_POST['pass'])
	{
		echo '登入成功！Hi, Allan';
	}
	elseif ($userB == $_POST['user'] && $_POST['pass'] == $passB)
	{
		echo '登入成功！Hi, Bill';
	}
	else
	{
	  echo '登入失敗！';
	}
	?>
  </body>
</html>
