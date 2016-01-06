<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>grade.php</title>
</head>
<body>
<?php 

$fp = fopen('grade.txt', 'a+');

// check name
$name = trim($name);
if (strlen($name) != 0)
{	
	// settype($name, 'string');
}
else
{	
	echo "Please input the student's name.\n";	
	echo '<a href="grade.html">'.'回上一頁繼續輸入'.'</a>';
	exit;
}

// check ID
$ID = trim($ID);
if (strlen($ID) != 0)
{
	// settype($ID, 'string');
}
else
{
	echo "Please input the student's ID.\n";	
	echo '<a href="grade.html">'.'回上一頁繼續輸入'.'</a>';
	exit;
}

// check email
$pattern = '/^[^@]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]+$/';
if (preg_match($pattern, $email))
{
		
}
else
{
	echo "Your email format is wrong.\n";	
	echo '<a href="grade.html">'.'回上一頁繼續輸入'.'</a>';
	exit;
}

// check cht grade
if (preg_match("/[0-9]/", $cht))
{
	if ($cht > 100) {
		echo "Please insert a score less than 100.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
	elseif ($cht < 0)	
	{
		echo "Please insert a score greater than 0.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}		
}
else
{
	echo "你的國文成績不是數字.\n";	
	echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
	exit;
}

// check eng grade
if (preg_match("/[0-9]/", $eng))
{
	if ($eng > 100) {
		echo "Please insert a score less than 100.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
	elseif ($eng < 0)	
	{
		echo "Please insert a score greater than 0.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
}
else
{
	echo "你的英文成績不是數字.\n";
	echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
	exit;
}

// check math grade
if (preg_match("/[0-9]/", $math))
{
	if ($math > 100) {
		echo "Please insert a score less than 100.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
	elseif ($math < 0)	
	{
		echo "Please insert a score greater than 0.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}			
}
else
{
	echo "你的數學成績不是數字.\n";
	echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
	exit;
}

// check phy grade
if (preg_match("/[0-9]/", $phy))
{
	if ($phy > 100) {
		echo "Please insert a score less than 100.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
	elseif ($phy < 0)	
	{
		echo "Please insert a score greater than 0.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}			
}
else
{
	echo "你的物理成績不是數字.\n";
	echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
	exit;
}

// check chm grade
if (preg_match("/[0-9]/", $chm))
{
	if ($chm > 100) {
		echo "Please insert a score less than 100.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}
	elseif ($chm < 0)	
	{
		echo "Please insert a score greater than 0.\n";
		echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
		exit;
	}		
}
else
{
	echo "你的化學成績不是數字.\n";
	echo '<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
	exit;
}

fwrite($fp, $name.','.$ID.','.$email.','.$cht.','.$eng.','.$math.','.$phy.','.$chm);
fwrite($fp, PHP_EOL);
fclose($fp);

echo '寫入完成! '.'<a href="grade.html">'.'回上一頁繼續輸入成績'.'</a>';
?>
</body>
</html>