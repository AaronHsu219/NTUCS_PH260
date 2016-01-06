<?php
if(isset($_GET['no']))
{
	//連接MySQL伺服器
	$link_ID = mysql_connect('localhost', 'root', 'student');

	//指定資料庫
	mysql_select_db('ch8');

	// 取出圖片類型和內容值
	$record = mysql_query("SELECT productPicType, productPicBlob FROM product WHERE productNo = '". $_GET['no'] ."'; ", $link_ID);

	$pic = mysql_fetch_array($record);

	//關閉資料庫連接
	mysql_close($link_ID);

	header("Content-type: " . $pic['productPicType']);
	echo $pic['productPicBlob'];
	exit;
}
?>
