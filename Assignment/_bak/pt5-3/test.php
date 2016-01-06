<?php 
$var = 100;
ob_start();
setcookie('c1', $var);
ob_end_flush();

echo $_COOIKE['c1']

?>