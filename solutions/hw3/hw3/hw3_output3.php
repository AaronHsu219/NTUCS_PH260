<?php
echo '<h3>3.</h3><br>';
if ($_POST['word'] == 'apple')
{
	echo 'apple = 蘋果';
}
elseif ($_POST['word'] == 'orange')
{
	echo 'orange = 橘子';
}
elseif ($_POST['word'] == 'watermelon')
{
	echo 'watermelon = 西瓜';
}
elseif ($_POST['word'] == 'strawberry')
{
	echo 'strawberry = 草莓';
}
elseif ($_POST['word'] == 'pineapple')
{
	echo 'pineapple = 鳳梨';
}
else
{
	echo '找不到!!';
}
?>