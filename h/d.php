<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi</title>
</head>
<body>
    <form method="post" action="">
        Search here <input type="text" name="kw" autofocus>
        <input type="submit" name="Submit" value="Search">
    </form>
<hr>





    <?php
        include ("connectdb.php");
        $kw = @$_POST['kw'];

        $sql = "SELECT * FROM `products` WHERE `p_name` like '%{$kw}%' OR `p_detail` like '%{$kw}%'";
        $rs = mysqli_query ($conn, $sql);
        while ($data = mysqli_fetch_array($rs)) {
            $p = $data['p_id'].".".$data['p_ext']; 

            echo "<img src = 'imgs/{$p}' width = '200'> <br>";
            echo "Product Name: ", $data['p_name'] ."<br>";
            echo "Price: {$data['p_price']} Dollar <br>";
            echo "Stock amount: ", $data['p_stock'] ."<br>";
            echo "Detail: ", $data['p_detail'] ."<hr>";
        }

        mysqli_close ($conn);

    ?>
</body>
</html>