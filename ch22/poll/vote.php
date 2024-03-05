<meta charset="utf-8">
<?php
 	include("config.inc.php") ;

	# เพิ่มคะแนนโหวต 1 คะแนน
	$sql = "UPDATE poll_choice SET c_score = c_score + 1 WHERE t_id = '".@$_POST['t_id']."' AND c_id = '".@$_POST['ans']."' ";
	$result = mysqli_query($conn, $sql) ;

	$sql = "SELECT * FROM poll_topic AS t, poll_choice AS c WHERE t.t_id = c.t_id AND t.t_id = '".@$_POST['t_id']."' ";
	$result = mysqli_query($conn, $sql) ;
	
			$result4 = mysqli_query($conn, "SELECT t_name FROM poll_topic WHERE t_id='{$_POST['t_id']}' ") ;
			$data4 = mysqli_fetch_array($result4) ;
			$d = $data4['t_name'] ;

	#  หาผลรวมคะแนน
	$result3 = mysqli_query($conn, $sql);
	while ($data3 = mysqli_fetch_array($result3))	{
		@$sum = $sum + $data3['c_score'] ;
	}

	echo "<table border=1>" ;
	echo "<tr><th colspan=3 height=30 bgcolor='#C7E2E2'>$d ?</td></tr>";
	echo "<tr>";
	echo "<th>ตัวเลือก</td>";
	echo "<th>คะแนน</td>";
	echo "<th>เปอร์เซ็นต์</td>";
	echo "</tr>";

	while ($data = mysqli_fetch_array($result))	{
		$percent = (@$data['c_score'] * 100)/$sum;				                  
		echo "<tr>";
		echo "<td>$data[c_id]. $data[c_name]</td>";	
		echo "<td align=center>$data[c_score]</td>";
		echo "<td>";
		$ro = round($percent);	
		echo "&nbsp;<img src=chart.png height=11 width=$ro> " ;
		echo round($percent, 2);											
		echo "%</td>";
		echo "</tr>";
	}
	echo "<tr>";
	echo "<th>รวมคะแนนโหวต</th>";
	echo "<th>".@$sum."</th>";
	echo "<th>100 %</th>";	
	echo "</tr>";
	echo "</table>";
	echo "</p><a href=index.php>กลับหน้าหลัก</a>" ;
?>