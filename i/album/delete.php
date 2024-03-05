<?php
    include("checklogin.php");
    if(isset($_GET['pid'])){
        include("connectdb.php");
        $sql ="DELETE FROM products WHERE `products`.`p_id` = '{$_GET['pid']}'";
        $rs = mysqli_query($conn,$sql) or die ("Cannot select") ;

        unlink("imgs/".$_GET['pid'].".".$_GET['ext']);
        
        echo"<script>";
        echo"window.location ='index2.php';";
        echo"</script>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product-info</title>
</head>
<body>
    <h1>Delete Prodcut information</h1>
</body>
</html>