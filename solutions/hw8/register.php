<html>
<head>
<title>會員註冊</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>會員註冊</h1>

<font color="red">*</font> 表示必填欄位<br><br>

<form method="POST" action="register_exe.php">
<font color="red">*</font>
姓名：<input type="text" name="memberName"><br>
<font color="red">*</font>
帳號：<input type="text" name="memberID"><br>
<font color="red">*</font>
密碼：<input type="text" name="memberPW"><br>
<font color="red">*</font>
信箱：<input type="text" name="memberEmail" size="50"><br>
地址：<input type="text" name="memberAddress" size="50"><br>
訂報：<input type="checkbox" name="memberEpaper" value="1"><br>
<input type="submit" value="送出">
</form>

</body>
</html>