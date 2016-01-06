<?php
// 紀錄管理者帳號與密碼
$id = 'allan';
$pw = '1234';

// 若使用者為第一次登入，則需要比對的是 $_POST 表單中填寫的資料
if ($_POST['id'] == $id && $_POST['pw'] == $pw)
{
	// 若資料填寫正確，則在 cookie 中紀錄其帳號、密碼資訊
	setCookie('id', $_POST['id'], date('U') + 40);	// 帳號存活 40 秒
	setCookie('pw', $_POST['pw'], date('U') + 40);	// 密碼存活 40 秒

	echo '首次登入成功';
}

// 若使用者先前已登入過，且在帳號密碼的 cookie 失效前再次進到本頁面
// 則去比對 $_COOKIE 中的資料是否正確
elseif ($_COOKIE['id'] == $id && $_COOKIE['pw'] == $pw)
{
	echo '曾經登入成功過，且COOKIE尚未死亡!';
}

// 其他的狀況一概當做登入錯誤失敗
else
{
	echo '帳號密碼錯誤，或COOKIE已失效!';
}
?>