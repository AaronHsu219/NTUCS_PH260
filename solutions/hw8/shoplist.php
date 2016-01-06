<?php
if (isset($_COOKIE['cart']))
{
?>

購物車中的內容：
<hr>
<table width="100%" border="1">

	<?php
	$shopList = explode('@', $_COOKIE['cart']);
	array_pop($shopList);

	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('ch8');
	mysql_query("SET CHARACTER SET UTF8;");
	
	$total = 0;

	for ($i = 0; $i < sizeof($shopList); $i++)
	{
		echo '<tr>';

		$cartRecord = mysql_query("SELECT * FROM product WHERE productNo = '". $shopList[$i] ."' ;", $link_ID);
		$cartArray = mysql_fetch_array($cartRecord);

		echo '<td width="75%">'. $cartArray['productName'] .'</td>';
		echo '<td width="25%">$'. number_format($cartArray['productPrice']) .'</td>';

		echo '</tr>';

		$total += $cartArray['productPrice'];
	}
	?>

	<tr>
		<td align="right">
			總計：
		</td>
		<td>
			<?php echo '$' . number_format($total)?>
		</td>
	</tr>

	<tr>
		<td align="center" colspan="2">
			<a href="purchase.php">結帳</a>
			／
			<a href="clear.php">清空購物車</a>
		</td>
	</tr>
</table>

<?php
}
?>