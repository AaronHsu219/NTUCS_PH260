<?php
$shopList = explode('@', $_COOKIE['cart']);
array_pop($shopList);

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

for ($i = 0; $i < sizeof($shopList); $i++)
{
	mysql_query("UPDATE product SET productStock = productStock - 1 WHERE productNo = '". $shopList[$i] ."' ;", $link_ID);
}

setCookie('cart', '');

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
echo '訂單已送出，謝謝訂購！<a href="index.php">回首頁</a>';
?>