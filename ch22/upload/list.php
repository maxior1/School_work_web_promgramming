<meta charset="utf-8">
<h2>Files List</h2>
<a href="index.php">กลับหน้าหลัก</a><hr />
<?php
	$dir = opendir("files/") ;
	while( $data = readdir($dir) ) {
		if ( ($data != ".") && ($data != "..") )
		echo "<a href='files/$data'>$data</a><br />";
	}
	closedir($dir) ;
?>