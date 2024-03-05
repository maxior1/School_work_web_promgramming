<?php
	@session_start() ;
	unset($_SESSION['ses_b_id']);
	unset($_SESSION['ses_b_title']);
	unset($_SESSION['ses_b_price']);
	unset($_SESSION['ses_item']);
	echo "<meta http-equiv=refresh content=0;url=index.php>" ;
	//header("Location : index.php") ;
?>