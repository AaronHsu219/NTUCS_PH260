<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 如果有上傳檔案
if ($_FILES['productPic']['name'])
{
	$fp = fopen($_FILES['productPic']['tmp_name'], 'r');
	$content = fread($fp, filesize($_FILES['productPic']['tmp_name']));
	
	#echo $content;
	#exit;
	
	$content = addslashes($content);
	
	#echo $content;
	#exit;
	
	fclose($fp);
}

// 寫入留言到資料庫
mysql_query("INSERT INTO product (productName, productPrice, productStock, productAbstract, productContent, productPicType, productPicBlob) VALUES ('". $_POST['productName'] ."', '". $_POST['productPrice'] ."', '". $_POST['productStock'] ."', '". $_POST['productAbstract'] ."', '". $_POST['productContent'] ."', '". $_FILES['productPic']['type'] ."', '". $content ."'); ", $link_ID);

//關閉資料庫連接
mysql_close($link_ID);

header('Location: product_list.php');

?>