<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กระดานถาม-ตอบ</title>
</head>

<body>
<p><b>กระดานถาม-ตอบ</b></p>
<p><a href="index.php">หน้าหลัก</a> | <a href="add_question.php">ตั้งคำถามใหม่</a></p>
<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
  <table width="400" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td>คำถาม</td>
      <td><textarea name="pquestion" cols="40" rows="4" id="pquestion" required></textarea></td>
    </tr>
    <tr>
      <td width="85">ชื่อผู้ถาม</td>
      <td width="308"><input name="pname" type="text" id="pname" required /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value=" บันทึก " /> <input type="reset" name="Submit2" value=" ยกเลิก " /></td>
    </tr>
  </table>
</form>
<?php
	include("config.inc.php") ;
	if (isset($_POST['Submit'])) {
		$sql = "INSERT INTO q_webboard VALUES('', '".$_POST['pquestion']."', '".$_POST['pname']."', NOW() ) ";
		$result = mysqli_query($conn, $sql) or die ("เพิ่มข้อมูลไม่ได้");
		echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	}
?>
</body>
</html>