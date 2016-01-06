<?php
include ('check.php');
?>

<html>
<head>
<title>admin - admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>權限管理</h1>

<form method="POST" action="admin_add_exe.php">
管理者ID：<input type="text" name="adminID"><br>
管理者PW<input type="text" name="adminPW"><br>
<input type="submit" value="送出">
</form>

</body>
</html>