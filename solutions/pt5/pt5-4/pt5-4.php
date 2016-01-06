<?php
$fp = fopen('grade.txt', 'w');
fwrite($fp, 'Allan,90,80,60'."\r\n");
fwrite($fp, 'Bill,100,100,100'."\r\n");
fclose($fp);

echo 'done!';
?>
