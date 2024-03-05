<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi</title>
</head>
<body>
    <?php
        include ("connectdb.php");

        $sql = "SELECT * FROM `category`";
        $rs = mysqli_query ($conn, $sql);
        while ($data = mysqli_fetch_array($rs)) {
            echo $data['c_id'] ."<br>";
            echo $data['c_name'] ."<hr>";
        }

        mysqli_close ($conn);

    ?>
</body>
</html>