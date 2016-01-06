<?php
include ('check.php');

if ($checkMember)
{
?>

<h3>會員專區</h3>

Hello, <font color="blue"><?php echo $_COOKIE['memberID']?></font> 歡迎回來<br><br>
<a href="edit.php">修改你的會員資料</a>│<a href="logout.php">會員登出</a>

<?php
}
else
{
?>

<h3>會員登入</h3>

<form method="POST" action="login.php">
<table border="0">
	<tr>
		<td>
			會員帳號：<input type="text" name="memberID" size="15">
		</td>
		<td rowspan="2">
			<input type="submit" value="登  入">
		</td>
	</tr>
	<tr>
		<td>
			會員密碼：<input type="password" name="memberPW" size="15">
		</td>
	</tr>
</table>
</form>

<?php
}
?>