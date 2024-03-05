<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบ่งหน้า</title>
</head>

<body>
<?php
if (empty($_GET['page'])) {
	$_GET['page'] = 1 ;
}
$per_page = 10 ;	// จำนวนรายการที่แสดงต่อหน้า

function printpage($page,$totalpage){
			$j = $_GET['page'] - 1 ;
			if($j >  0 ){ 
					@$body .=  " <a href=?page=".$j."><img src=images/prev.gif border=0 /></a> | " ;
			} 
			for($j = 1 ; $j <= $totalpage ;$j ++){
					if($j == $_GET['page']){
								@$body .= " <b><FONT color=red>".$_GET['page']."</font></b> | " ;
					} else{
								@$body .= " <a href=?page=".$j.">"  .$j."</a> | " ;
					}
		    }
			$j = $_GET['page'] + 1 ;
			if($j <=  $totalpage){ 
					@$body .= " <a href=?page=".$j."><img src=images/next.gif border=0 /></a> "  ;
			}
			return $body ;
}

		include("config.inc.php") ;
		$p_start = ( $per_page * $_GET['page'] ) - $per_page; 
		$sql = "SELECT * FROM province ORDER BY id ASC " ;
		$result = mysqli_query($conn, $sql) ;
		$numrow = mysqli_num_rows($result) ; 
		
		if ( $numrow <= $per_page ) {
			$totalpage = 1; 
		} elseif ( ( $numrow % $per_page ) == 0 ) {
			$totalpage = ( $numrow / $per_page ); 
		} else {
			$totalpage = ( $numrow / $per_page ) + 1; 
		}
			
$sql .= " LIMIT $p_start, $per_page"; 
$result = mysqli_query($conn, $sql); 
?>

<p><h2>77 จังหวัดในประเทศไทย</h2></p>
<p><b>หน้าที่</b> <?=printpage(@$page,$totalpage);?></p>
<table width="280" border="1" cellspacing="1" cellpadding="4">
  <tr>
    <th width="47">ที่</th>
    <th width="208">จังหวัด</th>
  </tr>
	<?php
		while ($data = mysqli_fetch_array($result)) {
	?> 
  <tr>
    <td align="center"><?=$data['id'];?></td>
    <td><?=$data['name'];?></td>
  </tr>
	<?php } ?>
</table>
<p><b>หน้าที่</b> <?=printpage(@$page,$totalpage);?></p>
</body>
</html>