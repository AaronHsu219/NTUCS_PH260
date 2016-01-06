<?php
$check = FALSE;

if ( isset($_COOKIE['id']) && isset($_COOKIE['pw']) )
{
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('ch8');
	$check = mysql_num_rows( mysql_query("SELECT * FROM admin WHERE adminID = '". $_COOKIE['id'] ."' AND adminPW = '". $_COOKIE['pw'] ."' ;", $link_ID) );
}

if ($check == FALSE)
{
	header('Location: index.php');
}
?>