<?php
$counter = ($_COOKIE['counter']) ? ++$_COOKIE['counter'] : 1;
setCookie('counter', $counter);
echo 'counter is ' . $counter;
?>