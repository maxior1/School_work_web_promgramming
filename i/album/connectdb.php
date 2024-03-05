<meta charset="UTF-8">
<?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "shop";
    $conn = mysqli_connect($host,$user,$pwd) or die ("Can't connect to database");
    mysqli_select_db($conn, $db) or die ("Can't find this database");
    mysqli_query($conn, "set names utf8");
?>