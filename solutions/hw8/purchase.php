<?php
include ('check.php');
include ('member_only.php');

$link_ID = mysql_connect('localhost', 'root', 'student');
mysql_select_db('ch8');
mysql_query("SET CHARACTER SET UTF8;");

$memberQuery = mysql_query("SELECT * FROM member WHERE memberID = '". $_COOKIE['memberID'] ."' AND memberPW = '". $_COOKIE['memberPW'] ."' ;", $link_ID);
$memberArray = mysql_fetch_array($memberQuery);
?>

<html>
<head>
<title>結帳</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<table width="900" border="0">
	<tr>
		<td width="50%" bgcolor="#EEEEEE">
			<h1><i>PHP 網路商城</i></h1>
		</td>
		<td>
			<?php include ('member.php'); ?>
		</td>
	</tr>
</table>

<table width="900" border="0">
	<tr>
		<td width="250">
			<?php include ('bar.php'); ?>
		</td>
		<td>
			<form method="POST" action="purchase_exe.php">
			<table width="100%" border="1">
				<tr>
					<td colspan="2" bgcolor="gray" align="center">
						送貨資訊
					</td>
				</tr>
				<tr>
					<td width="35%">收貨人姓名：</td>
					<td><input type="text" name="orderName" value="<?php echo $memberArray['memberName']?>"></td>
				</tr>
				<tr>
					<td width="35%">聯絡電話：</td>
					<td><input type="text" name="orderPhone"></td>
				</tr>
				<tr>
					<td width="35%">聯絡信箱：</td>
					<td><input type="text" name="orderEmail" size="50" value="<?php echo $memberArray['memberEmail']?>"></td>
				</tr>
				<tr>
					<td width="35%">送貨地址：</td>
					<td><input type="text" name="orderAddress" size="50" value="<?php echo $memberArray['memberAddress']?>"></td>
				</tr>
			</table>
			<br>
			<table width="100%" border="1">
				<tr>
					<td colspan="2" bgcolor="gray" align="center">
						購物內容
					</td>
				</tr>
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
			</table>
			<br>
			<table width="100%" border="1">
				<tr>
					<td colspan="2" bgcolor="gray" align="center">
						付帳資訊
					</td>
				</tr>
				<tr>
					<td width="35%">信用卡號碼：</td>
					<td>
						<input type="text" name="creditCard1" size="4" maxlength="4"> - 
						<input type="text" name="creditCard2" size="4" maxlength="4"> - 
						<input type="text" name="creditCard3" size="4" maxlength="4"> - 
						<input type="text" name="creditCard4" size="4" maxlength="4">
					</td>
				</tr>
				<tr>
					<td width="35%">卡別：</td>
					<td>
						<select name="creditType">
							<option>VISA</option>
							<option>Master Card</option>
							<option>JCB</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="35%">到期日：</td>
					<td>
						<select name="creditMon">
							<?php
							for ($i = 1; $i <= 12; $i++)
							{
								echo '<option>'. $i .'</option>';
							}
							?>
						</select>
						/
						<select name="creditYear">
							<?php
							for ($i = date('Y'); $i <= (date('Y') + 10); $i++)
							{
								echo '<option>'. $i .'</option>';
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td width="35%">卡片背後末三碼：</td>
					<td><input type="text" name="creditBack" size="3" maxlength="3"></td>
				</tr>
			</table>
			<br>
			<div align="center">
				<input type="submit" value="確認訂單資訊無誤後送出！">
			</div>
			</form>
		</td>
	</tr>
</table>

</body>
</html>