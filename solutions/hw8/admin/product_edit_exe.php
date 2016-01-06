<?php
include ('check.php');

//連接MySQL伺服器
$link_ID = mysql_connect('localhost', 'root', 'student');

//指定資料庫
mysql_select_db('ch8');

// 開始會使用中文了，記得指定使用 UTF8 編碼
mysql_query("SET CHARACTER SET UTF8;");

// 更新內容
mysql_query("UPDATE product SET productName = '". $_POST['productName'] ."', productPrice = '". $_POST['productPrice'] ."', productStock = '". $_POST['productStock'] ."', productAbstract = '". $_POST['productAbstract'] ."', productContent = '". $_POST['productContent'] ."' WHERE productNo = '". $_POST['no'] ."'; ", $link_ID);

// 如果有上傳檔案
if ($_FILES['productPic']['name'])
{
	$fp = fopen($_FILES['productPic']['tmp_name'], 'r');
	$content = fread($fp, filesize($_FILES['productPic']['tmp_name']));
	$content = addslashes($content);
	fclose($fp);

	// 更新圖片內容
	mysql_query("UPDATE product SET productPicType = '". $_FILES['productPic']['type'] ."', productPicBlob = '". $content ."' WHERE productNo = '". $_POST['no'] ."'; ", $link_ID);
}

//關閉資料庫連接
mysql_close($link_ID);

header('Location: product_list.php');

?>
