<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมุดเยี่ยม</title>
</head>

<body>
<p><a href="index.php">เขียนสมุดเยี่ยม</a> | <a href="show_guestbook.php">อ่านสมุดเยี่ยม</a></p>
<?php
	include("config.inc.php") ;
	$sql = "SELECT * FROM guestbook ORDER BY g_id DESC" ;
	$result = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($result)) {
?> 
<b>รหัส :</b> <?=$data['g_id'];?><br />
<b>ชื่อ :</b> <?=$data['g_name'];?><br />
<b>E-mail :</b> <?=$data['g_email'];?><br />
<b>ข้อความ :</b> <?=nl2br($data['g_message']);?><br />
<b>เขียนเมื่อ :</b> <?=$data['g_date'];?><hr />
<?php } ?>
</body>
</html>