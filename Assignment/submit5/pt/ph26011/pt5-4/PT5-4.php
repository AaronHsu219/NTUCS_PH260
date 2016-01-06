<?php 

$fp = fopen('grade.txt', 'w');
fwrite($fp, 'Allan,90,80,60');
fclose($fp);

echo 'done!';
?>