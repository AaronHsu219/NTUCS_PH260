<?php
function highlight_keyword($string, $keywords)
{
	$string = str_replace($keywords, '<span style="color:#000000 ;background-color: #FFFF66">' . $keywords . '</span>', $string);
	return $string;
}
?>