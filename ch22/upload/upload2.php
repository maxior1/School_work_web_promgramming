<meta charset="utf-8">
<?php
error_reporting(E_NOTICE);

	echo "<h2>Upload Files</h2>" ;
	echo "<form method='post' action='".$_SERVER['PHP_SELF']."' enctype='multipart/form-data'>" ;
	echo "<input type='file' name='picture[]' /><br />" ;
	echo "<input type='file' name='picture[]' /><br />" ;
	echo "<input type='file' name='picture[]' /><br />" ;
	echo "<input type='file' name='picture[]' /><br />" ;
	echo "<input type='file' name='picture[]' /><br />" ;
	echo "<input type='submit' name='Submit' value=' Upload ' />" ;
	echo "</form>" ;
	echo "<a href='list.php'>ดูรายการไฟล์ทั้งหมด</a><p />" ;
	echo "<a href='index.php'>กลับหน้าหลัก</a><p />" ;

	if (isset($_POST['Submit'])) {
		if (isset($_FILES['picture'])) {
			for ($i=0; $i<=count($_FILES['picture']); $i++) {
				$cp = @copy ($_FILES['picture']['tmp_name'][$i], "files/".$_FILES['picture']['name'][$i]) ;
			}
		}		
	}
?>