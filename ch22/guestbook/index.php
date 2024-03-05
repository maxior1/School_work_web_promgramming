<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมุดเยี่ยม</title>
</head>

<body>
<p><a href="index.php">เขียนสมุดเยี่ยม</a> | <a href="show_guestbook.php">อ่านสมุดเยี่ยม</a></p>
<form id="form1" name="form1" method="post" action="add_guestbook.php">
  <table width="400" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td width="85">ชื่อ</td>
      <td width="308"><input name="pname" type="text" id="pname" /></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input name="pemail" type="text" id="pemail" /></td>
    </tr>
    <tr>
      <td>ข้อความ</td>
      <td><textarea name="pmessage" cols="30" rows="4" id="pmessage"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value=" บันทึก " /> <input type="reset" name="Submit2" value=" ยกเลิก " /></td>
    </tr>
  </table>
</form>
</body>
</html>