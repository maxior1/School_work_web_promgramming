<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Reaksa Yi</title>


</head>
<body>
    <form method="post" action="">
        Student ID: <input type="text" name="std" autofocus required> 
        <input type="submit" name="Submit" value="OK">
    </form> 
    <hr>
    <?php
    if (isset($_POST["Submit"])) {
        $std = $_POST['std'];
        $y = substr($std, 0, 2);
        echo "<img src ='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width ='700'";
        
    }
    ?>
    

</body>
</html>