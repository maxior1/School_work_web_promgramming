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
            <input type="number" name="a" min="0" max="100" autofocus require>
            <button type="submit" name="Submit">OK</button>
        </form>
<hr>

    <?php
        if(isset($_POST['Submit'])) {
        $score = $_POST['a'];
        
       if ($score >=80) {
            $g = "A <Br> <img src='https://uxwing.com/wp-content/themes/uxwing/download/festival-culture-religion/party-hat-icon.png' width ='150'>";
            
        }
        elseif ($score >= 70) {
            $g = "B";
            }
        elseif ($score >= 60) {
            $g = "C";
        }
        elseif ($score >= 50) {
            $g = "D";
        }
        else {
            $g ="F";
        }
   
    echo "Your Score $score get grade $g ";
}
    ?>



    </head>

</body>
</html>