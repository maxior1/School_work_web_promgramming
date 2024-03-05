<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กระดานถาม-ตอบ</title>
</head>

<body>
<p><b>กระดานถาม-ตอบ</b></p>
<p><a href="index.php">หน้าหลัก</a> | <a href="add_question.php">ตั้งคำถามใหม่</a></p>
<table width="770" border="1" cellspacing="1" cellpadding="4">
  <tr>
    <th width="34">ที่</th>
    <th width="319">หัวข้อคำถาม</th>
    <th width="106">ชื่อผู้ถาม</th>
    <th width="158">วันที่</th>
    <th width="95">จำนวนผู้ตอบ</th>
  </tr>
	<?php
		include("config.inc.php") ;
		$sql = "SELECT * FROM q_webboard ORDER BY q_id DESC" ;
		$result = mysqli_query($conn, $sql) ;
		while ($data = mysqli_fetch_array($result)) {
			$sql2 = "SELECT * FROM a_webboard WHERE q_id='".$data['q_id']."' " ;
			$result2 = mysqli_query($conn, $sql2) ;
			$numrow = mysqli_num_rows($result2) ;
	?> 
  <tr>
    <td align="center"><?=$data['q_id'];?></td>
    <td><a href="show_detail.php?q_id=<?=$data['q_id'];?>"><?=$data['q_question'];?></a></td>
    <td><?=$data['q_name'];?></td>
    <td><?=$data['q_date'];?></td>
    <td align="center"><?=$numrow;?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>