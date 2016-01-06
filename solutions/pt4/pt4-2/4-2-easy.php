<?php
$pt1 = 0;
$pt2 = 0;
$pt3 = 0;
$pt4 = 0;
$pt5 = 0;
$pt6 = 0;

for ($i = 0; $i < 10000; $i++)
{
	$num = rand(1, 6);
	if ($num == 1)
	{
	  $pt1++;
	}
	elseif ($num == 2)
	{
	  $pt2++;
	}
	elseif ($num == 3)
	{
	  $pt3++;
	}
	elseif ($num == 4)
	{
	  $pt4++;
	}
	elseif ($num == 5)
	{
	  $pt5++;
	}
	elseif ($num == 6)
	{
	  $pt6++;
	}
}

echo '1點次數: ' . $pt1 . '('. ($pt1 / 100) .')<br>';
echo '2點次數: ' . $pt2 . '('. ($pt2 / 100) .')<br>';
echo '3點次數: ' . $pt3 . '('. ($pt3 / 100) .')<br>';
echo '4點次數: ' . $pt4 . '('. ($pt4 / 100) .')<br>';
echo '5點次數: ' . $pt5 . '('. ($pt5 / 100) .')<br>';
echo '6點次數: ' . $pt6 . '('. ($pt6 / 100) .')<br>';

?>
