<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi</title>
</head>
<body>
    <head>
        <h1>Grading Program</h1> 
        <form method="post" action="">
           Multiply: <input type="number" name="a" min="2" max="100" autofocus require>
            <button type="submit" name="Submit">OK</button>
        </form>
<hr>

    <?php
        if(isset($_POST['Submit'])) {
        $m = $_POST['a'];
        echo "<h1>Multiply Formula {$m}</h1> ";

         for ($i=1; $i<=12; $i++) {
            $x = $m * $i;
            echo "{$m} x {$i} = {$x} <br>";
         }
       
   
    
}
    ?>



    </head>

</body>
</html>