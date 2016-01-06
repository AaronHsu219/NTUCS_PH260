<?php
include ('check.php');
?>

<html>
<head>
<title>admin - product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>商品管理</h1>

<form method="POST" action="product_add_exe.php" enctype="multipart/form-data">
商品名稱：<input type="text" name="productName"><br>
商品售價：<input type="text" name="productPrice" size="5" maxlength="5"><br>
庫存數量：<input type="text" name="productStock" size="5" maxlength="5"><br>
商品圖片：<input type="file" name="productPic"><br>
商品摘要：<textarea name="productAbstract"></textarea><br>
商品內容：<textarea name="productContent"></textarea><br>

<?php
include ('../ckeditor/ckeditor.php');

$CKEditor = new CKEditor();

$CKEditor->config['width'] = 600;

$CKEditor->basePath = '../ckeditor/';

//$CKEditor->replace("productAbstract");
$CKEditor->replace("productContent");
?>

<input type="submit" value="送出">
</form>

</body>
</html>