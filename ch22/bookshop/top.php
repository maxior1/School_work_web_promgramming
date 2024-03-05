<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bookshop Online</title>
</head>

<body>
<a href="index.php"><img src="images/logo.png" width="300" height="69" border="0" /></a><br />
<table width="510" border="0" cellspacing="1" cellpadding="4">
  <tr>
    <th width="397" align="left" scope="col"><b>หมวด :</b>
<?php
	include("config.inc.php") ;
	$sql = "SELECT * FROM bs_category ORDER BY c_id ASC" ;
	$result = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($result)) {
		echo "<a href=index.php?c_id=".$data['c_id'].">".$data['c_name']."</a> | " ;
	}
?></th>
    <th width="94" scope="col"><a href="basket.php">ตะกร้าสินค้า</a></th>
  </tr>
</table> 
<p></p>
</body>
</html>
