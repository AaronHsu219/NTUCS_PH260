<?php
include ('check.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

// 抓出該筆資料的內容值
$result = mysql_query("SELECT * FROM product WHERE productNo = '". $_GET['no'] ."' ;", $link_ID);

$record = mysql_fetch_array($result);

mysql_close($link_ID);
?>
<html>
<head>
<title>admin - product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>商品管理</h1>

<form method="POST" action="product_edit_exe.php" enctype="multipart/form-data">
<input type="hidden" name="no" value="<?php echo $_GET['no']?>">
商品名稱：<input type="text" name="productName" value="<?php echo $record['productName']?>"><br>
商品售價：<input type="text" name="productPrice" value="<?php echo $record['productPrice']?>" size="5" maxlength="5"><br>
庫存數量：<input type="text" name="productStock" value="<?php echo $record['productStock']?>" size="5" maxlength="5"><br>
商品圖片：<input type="file" name="productPic" value="123"><br>
商品摘要：<textarea name="productAbstract"><?php echo $record['productAbstract']?></textarea><br>
商品內容：<textarea name="productContent"><?php echo $record['productContent']?></textarea><br>

<?php
include ('../ckeditor/ckeditor.php');

$CKEditor = new CKEditor();

$CKEditor->basePath = '../ckeditor/';

$CKEditor->replace("productContent");
?>

<input type="submit" value="送出">
</form>

</body>
</html>