<?php 
$person1 = '阿寶';
$person2 = '阿花';

$total = array(
	'A' => array($_POST['a_1'] , $_POST['a_2'], $_POST['a_3']),
	'B' => array($_POST['b_1'] , $_POST['b_2'], $_POST['b_3'])
	);

$sum = array('A' => 0, 'B' => 0 );

foreach ($total as $key => $value) {
	for ($i=0; $i < sizeof($value); $i++) { 
		$sum[$key] += $value[$i]
	}
}

if (condition) {
	echo "string";
}
else{
	echo "string";
}

// $first = rand(1,7);
// $second = rand(1,7);
// $third = rand(1,7);

// echo "string".$first."<br><br>";
// echo "string".$second."<br><br>";
// echo "string".$third."<br><br>";
// for ($i=0; $i < 6; $i++) { 
// 	echo "string";
// }
 ?>