<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi</title>
</head>
<body>
    <head>
       Welcome to Max's Website <br>

    <?php
        $name ="Reaksa Yi";
        $name .=" Max";
        $age = 21 ;
        $height = 1.68;
        echo gettype($age)."<br>"; 
        echo gettype($name)."<br>";
        var_dump($height);
        echo "<br>";
        var_dump($name);
    
    ?>
<hr>

    <?php
        $a=5;
        $b=3;
        $c= $a + $b *2;
        echo $c;

    ?>

    </head>

</body>
</html>