<?php
// 檢查姓名不能有數字
if (!$_POST['name'] || preg_match('/[0-9]+/', $_POST['name']))
{
	echo '姓名不能有數字';
	exit;
}

// 檢查學號為八位數字
if (!$_POST['sn'] || !preg_match('/^[0-9]{8}$/', $_POST['sn']))
{
	echo '學號為八位數字';
	exit;
}

// 檢查Email格式
if (!$_POST['email'] || !preg_match('/^[^@]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/', $_POST['email']))
{
	echo '檢查Email格式';
	exit;
}

// 檢查成績格式
for ($i = 1; $i <= 5; $i++)
{
	if (!preg_match('/^[0-9]{1,3}$/', $_POST['grade' . $i]))
	{
		echo '成績資料有誤, 只能接受 1~3 位數字';
		exit;
	}
}

$link = mysql_connect('localhost', 'root', 'student');
mysql_select_db('hw6');
mysql_query("SET CHARACTER SET UTF8;");
mysql_query("INSERT INTO hw6 (hw6Name, hw6SN, hw6Email, hw6Grade1, hw6Grade2, hw6Grade3, hw6Grade4, hw6Grade5) VALUES ('".$_POST['name']."', '".$_POST['sn']."', '".$_POST['email']."', '".$_POST['grade1']."', '".$_POST['grade2']."', '".$_POST['grade3']."', '".$_POST['grade4']."', '".$_POST['grade5']."')", $link);
mysql_close();
?>

OK 寫入完成 <a href="input.html">回上一頁繼續輸入</a>