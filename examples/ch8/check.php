<?php
$checkMember = FALSE;

if (isset($_COOKIE['memberID']) && isset($_COOKIE['memberPW']))
{
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('ch8');
	$checkMember = mysql_num_rows( mysql_query("SELECT * FROM member WHERE memberID = '". $_COOKIE['memberID'] ."' AND memberPW = '". $_COOKIE['memberPW'] ."' ;", $link_ID) );
}
?>