<?php
    session_start();
    include("connectdb.php");

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage All</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
</head>
<body>


<h2>All Information</h2> <br>
<a href="insert.php" class="create-new">Add New</a>
<br>

<table border=1 >
    <thead style="background: lightpink;" >
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Product name</th>
        <th scope="col">Details</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Type</th>
    </tr>
    </thead>
    <tbody>

    <?php
        include("connectdb.php");

        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['p_id']?></td>
                <td><?php echo $row['p_name']?></td>
                <td><?php echo $row['p_detail']?></td>
                <td><?php echo $row['p_price']?></td>
                <td><?php echo $row['p_stock']?></td>
                <td><?php echo $row['p_type']?></td>
                
            
        </tr>



            <?php
        }
    ?>
       

            
    
    </tbody>
</table>

</body>
</html>