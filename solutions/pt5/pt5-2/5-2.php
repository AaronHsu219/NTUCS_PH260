<?php
if ($_COOKIE['counter'])
{
	$cookie = $_COOKIE['counter'] + 1;
	setCookie('counter', $cookie);
	echo 'counter is ' . $cookie;
}
else
{
	setCookie('counter', 1);
	echo 'counter is 1';
}
?>