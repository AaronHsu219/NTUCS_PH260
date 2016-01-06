<?php 
if ($_COOKIE['counter']) {
	$cookie = $_COOKIE['counter'] + 1;
	setcookie('counter', $cookie);
	echo 'counter is '.$cookie;
} else {
	setcookie('counter', 1);
	echo 'counter is 1';
}
?>