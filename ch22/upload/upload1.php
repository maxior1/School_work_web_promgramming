<meta charset="utf-8">
<?php
	echo "<h2>Upload File</h2>" ;
	echo "<form method='post' action='".$_SERVER['PHP_SELF']."' enctype='multipart/form-data'>" ;
	echo "<input type='file' name='picture' /><br />" ;
	echo "<input type='submit' name='Submit' value=' Upload ' />" ;
	echo "</form>" ;
	echo "<a href='list.php'>ดูรายการไฟล์ทั้งหมด</a><p />" ;
	echo "<a href='index.php'>กลับหน้าหลัก</a><p />" ;

	if (isset($_POST['Submit'])) {
		if (isset($_FILES['picture'])) {
			$cp = copy ($_FILES['picture']['tmp_name'], "files/".$_FILES['picture']['name']) ;
			if($cp) {
				echo "อัพโหลดไฟล์เรียบร้อยแล้ว" ;
			} else {
				echo "อัพโหลดไฟล์ไม่ได้" ;
			}
		}		
	}
?>