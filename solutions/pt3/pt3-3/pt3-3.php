<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>PT3-3 output</title>
  </head>
  <body>
	<?php
	echo '國文成績：' . $_POST['chn'] . '<br><br>';
	echo '英文成績：' . $_POST['eng'] . '<br><br>';
	echo '數學成績：' . $_POST['math'] . '<br><br>';
	
	$total = $_POST['chn'] + $_POST['eng'] + $_POST['math'];
	$avg = $total / 3;

	echo '總分：' . $total . '<br><br>';
	echo '總分：' . ($_POST['chn'] + $_POST['eng'] + $_POST['math']) . '<br><br>';
	echo '平均成績：' . $avg . '<br><br>';
	echo '平均成績：' . (($_POST['chn'] + $_POST['eng'] + $_POST['math']) / 3) . '<br><br>';
	?>
  </body>
</html>








