<meta charset="utf-8">

<?php
	$file = "counter.txt" ;
	$open1 = fopen($file, "r") ;
	$get_number = fread($open1, filesize($file)) ;
	fclose($open1) ;

	$get_number = $get_number + 1 ;

	$open2 = fopen($file, "w") ;
	fwrite($open2, $get_number) ;
	fclose($open2) ;

	$digit = sprintf("%06d", $get_number) ;
	echo "คุณเข้าเยี่ยมชมเป็นลำดับที่ " ;
	for ($i = 0; $i<6; $i++) {
		echo "<img src='images/".$digit[$i].".gif' />" ;
	}
?>