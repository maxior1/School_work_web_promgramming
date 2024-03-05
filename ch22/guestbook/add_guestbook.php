<meta charset="utf-8">
<p><a href="index.php">เขียนสมุดเยี่ยม</a> | <a href="show_guestbook.php">อ่านสมุดเยี่ยม</a></p>
<?php
	include("config.inc.php") ;
	if (isset($_POST['Submit'])) {
		$sql = "INSERT INTO guestbook VALUES('', '".$_POST['pname']."', '".$_POST['pemail']."', '".$_POST['pmessage']."', NOW() ) ";
		$result = mysqli_query($conn, $sql) or die ("เพิ่มข้อมูลไม่ได้");
		echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	}
?>