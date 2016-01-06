<?php
include ('check.php');
?>

<html>
<head>
<title>admin - epaper</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h1>發送電子報</h1>

<?php
include ('bar.php');
?>

<form method="POST" action="epaper_send_exe.php">
標題：<input type="text" name="epaperSubject"><br>
內容：<textarea name="epaperContent"></textarea><br>

<?php
include ('../ckeditor/ckeditor.php');

$CKEditor = new CKEditor();

$CKEditor->config['width'] = 600;

$CKEditor->basePath = '../ckeditor/';

$CKEditor->replace("epaperContent");
?>

<input type="submit" value="送出">
</form>

</body>
</html>