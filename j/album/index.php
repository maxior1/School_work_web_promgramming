<?php
    session_start();
    include("connectdb.php");

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
        <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <h1><span>Maxo</span>Fash</h1>
            </div>

            <!-- Login Form -->
            <form method="post" action="">
            <input type="text" class="fadeIn second" name="usr" placeholder="Username">
            <input type="password" class="fadeIn third" name="pwd" placeholder="Password">
            <input type="submit" name="Submit" class="fadeIn fourth" value="LOGIN">
            </form>


            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
        </div>


     
<?php

        if(isset($_POST['Submit'])){
            $sql ="SELECT * FROM `admin` WHERE `a_usr` ='{$_POST['usr']}' and `a_pwd` ='".md5($_POST['pwd'])."' limit 1";
            $rs = mysqli_query($conn,$sql) or die ("Cannot select") ;
            $num = mysqli_num_rows($rs);
            if ($num >0){
                $data = mysqli_fetch_array($rs);
                $_SESSION ["aid"] = $data['a_id'];
                $_SESSION ["aname"] = $data['a_name'];

                echo"<script>";
                echo"window.location ='index2.php';";
                echo"</script>";

            } else {
                echo "<script>";
                echo "alert ('Incorrect Password or Username');";
                echo "</script>";
              }

         }

?> 
</body>
</html>
