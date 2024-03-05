<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบสำรวจความคิดเห็น</title>
</head>

<body>
 <h2>แบบสำรวจความคิดเห็น</h2>
 <?php
 	include("config.inc.php") ;
	
	$sql = "SELECT * FROM poll_topic ORDER BY t_id ASC" ;
	$result = mysqli_query($conn, $sql) ;
	echo "<select name=tid onchange='location=value'>" ;
	echo "<option value=0>&lt; - - - - เลือก - - - - &gt;</option>" ;
	while ( $data = mysqli_fetch_array($result) ) {
		echo "<option value=".$_SERVER['PHP_SELF']."?tid=$data[t_id]>$data[t_name]</option>" ;
	}
	echo "</select>" ;
	
	if (isset($_GET['tid'])) {
		echo " <form method=post action=vote.php>" ;
		$sql2 = "SELECT * FROM poll_choice AS c, poll_topic AS t WHERE c.t_id=".$_GET['tid']." AND c.t_id=t.t_id ORDER BY c.c_id ASC" ;
		$result2 = mysqli_query($conn, $sql2) ;
			
			$result3 = mysqli_query($conn, "SELECT t_name FROM poll_topic WHERE t_id='{$_GET['tid']}' ") ;
			$data3 = mysqli_fetch_array($result3) ;
			echo "<p><b>{$data3['t_name']} ?</b><p/>" ;

		while ($data2 = mysqli_fetch_array($result2)) {
			echo "<input name=ans type=radio value=$data2[c_id] /> $data2[c_name]<br />" ;
			echo "<input type=hidden name=t_id value=$data2[t_id]>" ;
		}
		echo "<br/><input type=submit name=Submit value='  Vote  ' " ;
		echo "<form>" ;
	}
 ?>
</body>
</html>