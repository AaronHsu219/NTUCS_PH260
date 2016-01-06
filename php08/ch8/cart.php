<?php
include ('check.php');
include ('member_only.php');

$cart =  (isset($_COOKIE['cart'])) ? $_COOKIE['cart'] : '';
$cart .= $_GET['no'] . '@';
#$cart = $cart . $_GET['no'] . '@';

setCookie('cart' , $cart);
header('Location: product.php');
?>