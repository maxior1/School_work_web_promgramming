<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bookshop Online</title>
<style type="text/css">
<!--
.txt10 {
	font-family: "ms Sans Serif", "microsoft Sans Serif";
	font-size: 10pt;
}
-->
</style>
</head>

<body>
<?php
	include("top.php") ;
?>
<table width="500" border="1" cellspacing="1" cellpadding="4">
<?php
	include("config.inc.php") ;
	$sql = "SELECT * FROM bs_book WHERE c_id='{$_GET['c_id']}' ORDER BY b_id ASC" ;
	$result = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($result)) {
?>
  <tr>
    <th width="155"><img src="images/<?=$data['b_image'];?>" /></th>
    <td width="320" class="txt10">
	<h3><?=$data['b_title'];?><br />
	<b>ราคา <?=$data['b_price'];?> บาท</b></h3>
	<b>รายละเอียด :</b><br />
	<?=$data['b_detail'];?><br />
	<b>ผู้เขียน :</b> 
	<?=$data['b_author'];?><br />
	<b>สำนักพิมพ์ :</b> 
	<?=$data['b_publisher'];?><br />
	<form method="post" action="basket.php">
	จำนวน
	<?php
		echo "<select name=item>" ;
		for ($i=1; $i<=20; $i++) {
			echo "<option value=$i>$i</option>" ;
		}
		echo "</select>" ;
	?>
	เล่ม
	<input type="hidden" name="b_id" value="<?=$data['b_id'];?>" />
	<input type="image" name="Submit" src="images/cart.gif" />
	</form>
	</td>
  </tr>
<?php } ?>
</table>
</body>
</html>