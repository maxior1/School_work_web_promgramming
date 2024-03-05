<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi</title>
</head>
<body>
    <head>
        <h1>Regiter form</h1> 
        <form method="post" action="">
            <input type="number" name="a" autofocus require>
            <button type="submit" name="Submit">OK</button>
        </form>
<hr>

    <?php
    if(isset($_POST['Submit'])) {
        $gender = $_POST['a'];

        if ($gender == 1) {
            echo "Male <br> <img src='https://uxwing.com/wp-content/themes/uxwing/download/business-professional-services/team-member-icon.png' width ='150'";
        }
        elseif ($gender == 2) {
            echo "Female <br> <img src='https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/woman-lady-icon.png' width ='150'";
        }
        elseif ($gender == 3) {
            echo "Other <br> <img src='https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/genderqueer-symbol-icon.png' width ='150'";
        }
        else {
            echo "Input 1 for Male <br>"; 
            echo "Input 2 for Female <br>";
            echo "Input 2 for Other";
        }
    }
       
    
    ?>



    </head>

</body>
</html>