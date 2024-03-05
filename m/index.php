<?php
	include("connectdb.php");
?>
<!doctype html>
<html>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<head>
<meta charset="utf-8">
<title>รายการสินค้า</title>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
		margin-left: 20px;
	}
</style>
</head>

<body>
<h2>รายการสินค้าทั้งหมด</h2>
<p>
	<a href="basket.php" class="btn btn-success">ตะกร้าสินค้า</a>
</p>

<?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>

<a href="index.php?pt=<?=$data2['pt_id'];?>" class="btn btn-info"><?=$data2['pt_name'];?></a> | 

<?php } ?>

<br><br>
<form class="form-inline" action="index.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">ค้นหา</label>  
  <div class="col-md-4">
  <input name="kw" type="text" placeholder="กรอกคำค้น" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">
		
	ค้นหา</button>
  </div>
</div>

</fieldset>
</form>


<?php
	@$kw = $_POST['kw'] ;
	@$pt = $_GET['pt'] ;
	if (isset($_GET['pt'])) {
		$s = "and (p_type = '$pt')"; 
	} else {
		$s = "";	
	}
	$sql = "select * from product where ( p_name like '%$kw%' or p_detail like '%$kw%' ) $s ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		if( ($i % 3) == 1) {
			echo "<div class='row' align='center' style='width:100%;'>";
		}
?>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="images/<?=$data['p_picture'];?>" width="200">
      <div class="caption">
        <h4><?=$data['p_name'];?></h4>
        <h4><?=number_format($data['p_price'],0);?> บาท</h4>
        <p><a href="basket.php?id=<?=$data['p_id'];?>" class="btn btn-primary" role="button">หยิบลงตะกร้า</a> </p>
      </div>
    </div>
  </div>
<?php 
		if ( ($i % 3 ) == 0){
			echo "</div>";	
		}
	} // end while

	mysqli_close($conn);
?>

</body>
</html>