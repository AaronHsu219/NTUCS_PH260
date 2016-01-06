<?php
include ('check.php');
include ('member_only.php');

setCookie('cart' , '');
header('Location: product.php');
?>