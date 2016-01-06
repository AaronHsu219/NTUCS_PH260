<?php
include('fruits.php');

echo 'prefix = ' . $_GET['prefix'];

if ($_GET['prefix'])
{
	echo '<table width="300" border="1">';

	foreach($fruit[$_GET['prefix']] as $key => $value)
	//while (list ($key, $value) = each($fruit[$_GET['prefix']]))
	{
		echo '<tr><td>'. $key .'</td><td>'. $value .'</td></tr>';
	}

	echo '</table>';
}
?>