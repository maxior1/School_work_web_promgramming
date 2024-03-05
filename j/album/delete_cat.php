<?php
    // include("checklogin.php");
    if(isset($_GET['cid'])){
        include("connectdb.php");
        $sql ="DELETE FROM category WHERE `category`.`c_id` = '{$_GET['cid']}'";
        $rs = mysqli_query($conn,$sql) or die ("Cannot delete") ;

        
        echo"<script>";
        echo"window.location ='insert2.php';";
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