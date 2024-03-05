<meta charset="utf-8">
<?php
$host = "localhost";
$usr = "root";
$pwd = "";
$dbName = "shoponline2";

$conn = mysqli_connect($host, $usr, $pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้") ;
mysqli_select_db($conn, $dbName) ;
mysqli_query($conn, "set names utf8");
?>