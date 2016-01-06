<?php
include ('check.php');
?>

<html>
<head>
<title>admin - news</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>最新訊息</h1>

<form method="POST" action="news_add_exe.php">
新聞標題：<input type="text" name="newsSubject"><br>
新聞內容：<textarea name="newsContent"></textarea><br>
<input type="submit" value="送出">
</form>

</body>
</html>