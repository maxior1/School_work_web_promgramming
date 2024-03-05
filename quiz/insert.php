<?php 
    include("connectdb.php");

    if(isset($_POST['submit'])){
        $p_name = $_POST['p_name'];
        $p_detail = $_POST['p_detail'];
        $p_price = $_POST['p_price'];
        $p_stock = $_POST['p_stock'];
        $p_type = $_POST['p_type'];

        $sql = "INSERT INTO `product`(`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_type`) 
                VALUES (NULL,'$p_name','$p_detail','$p_price','$p_stock','$p_type')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: index.php?smg=New record CREATED");
            
        }
        else {
            echo "Failed: ".mysqli_error($conn);
        }

    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Insert Information</h2>

    <form action="" method="post">
        <label>Product Name:</label>
        <input type="text" name="p_name" autofocus> <br><br>
        <label>Detail:</label>
        <select required name="p_detail" >
            <option value="High Tree for farm">High Tree farm</option>
            <option value="Small Tree in house">Small Tree house</option>
            </select><br><br>
        <label>Price:</label>
        <input type="number" name="p_price" > <br><br> 
        
        <label>Stock:</label>
        <input type="number" name="p_stock" > <br><br>
        <label>Type of tree:</label>
        <select required name="p_type">
            <option  value="High Tree">High Tree</option>
            <option  value="Small Tree">Small Tree</option>
            </select><br><br>
        <button type="submit" class="btn btn-success my-2" name="submit">Save</button>
        <a href="index.php" >Cancel</a>
    </form>



</body>
</html>