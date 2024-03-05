<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กระดานถาม-ตอบ</title>
</head>

<body>
<p><b>กระดานถาม-ตอบ</b></p>
<p><a href="index.php">หน้าหลัก</a> | <a href="add_question.php">ตั้งคำถามใหม่</a></p>
	<?php
		include("config.inc.php") ;
		$sql = "SELECT * FROM q_webboard WHERE q_id='".$_GET['q_id']."' " ;
		$result = mysqli_query($conn, $sql) ;
		$data = mysqli_fetch_array($result) ;
	?>
	<table width="540" border="1" cellspacing="1" cellpadding="4">
    <tr>
      <th height="40" bgcolor="#C7E2E2"><< <?=$data['q_question'];?> >></th>
    </tr>
    <tr>
      <td><b>ชื่อผู้ถาม</b> : <?=$data['q_name'];?> &nbsp; <b>วันที่</b> : <?=$data['q_date'];?> </td>
    </tr>
  </table>
    <br />
	<?php
		$sql2 = "SELECT * FROM a_webboard WHERE q_id='".$_GET['q_id']."' " ;
		$result2 = mysqli_query($conn, $sql2) ;
		while ($data2 = mysqli_fetch_array($result2)) {
		@$num++;
	?>
    คำตอบที่ <?=$num;?>
    <table width="500" border="1" cellspacing="1" cellpadding="4">
      <tr>
        <td height="40"><?=nl2br($data2['a_answer']);?></td>
      </tr>
      <tr>
        <td><b>ชื่อผู้ตอบ</b> : <?=$data2['a_name'];?>
          &nbsp; <b>วันที่</b> : <?=$data2['a_date'];?></td>
      </tr>
    </table>
    <br />
	<?php } ?>
	<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF'];?>?q_id=<?=$data['q_id'];?>">
	  <table width="400" border="0" cellspacing="1" cellpadding="1">
		<tr>
		  <td>คำตอบ</td>
		  <td><textarea name="panswer" cols="40" rows="4" id="panswer" required></textarea></td>
		</tr>
		<tr>
		  <td width="85">ชื่อผู้ตอบ</td>
		  <td width="308"><input name="pname" type="text" id="pname" required /></td>
		</tr>
		<tr>
		  <td><input type="hidden" name="q_id2" value="<?=$_GET['q_id'];?>" /></td>
		  <td><input type="submit" name="Submit" value=" บันทึก " /> <input type="reset" name="Submit2" value=" ยกเลิก " /></td>
		</tr>
	  </table>
	</form>
	<?php
		if (isset($_POST['Submit'])) {
			$sql = "INSERT INTO a_webboard VALUES('', '".$_POST['panswer']."', '".$_POST['pname']."', NOW(), '".$_POST['q_id2']."' ) ";
			$result = mysqli_query($conn, $sql) or die ("เพิ่มข้อมูลไม่ได้");
			echo "บันทึกข้อมูลเรียบร้อยแล้ว";
			echo "<meta http-equiv=refresh content=2>" ;
		}
	?>
</body>
</html>
