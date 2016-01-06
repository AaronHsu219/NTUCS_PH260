<?php 
// $first = rand(1,7);
// $second = rand(1,7);
// $third = rand(1,7);

// echo "string".$first."<br><br>";
// echo "string".$second."<br><br>";
// echo "string".$third."<br><br>";
// for ($i=0; $i < 6; $i++) { 
// 	echo "string";
$id = ' Allan';
$pw = ' 1111';
echo "string";
if ($loginName == trim(strtolower($_POST['id'])) && $pw == $_POST['pw'] ){
	echo "welcome Allan!";
} 
else{
	echo "access denied";
}
 ?>
