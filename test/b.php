<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to right, lightblue, burlywood);
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            font-family: Arial;
            line-height: 30px;
            text-align: center;
            

        }
        i {
        font-family: Arial;
        font-size: 30px;
        color: darkblue;
        font-weight: 700;
        }
    </style>
</head>
<body>
<legend><i class='bx bx-book-heart'>Maxorize Co,Ltd</i></legend>
<hr>
<?php
    if (isset($_POST["Submit"])) {
        echo "Fullname: ".$_POST["prefix"],$_POST["fullname"]. "<br>";
        echo "Job position: ".$_POST["jobpos"]. "<br>"; 
        echo "Date of birth: ".$_POST["date"]. "<br>"; 
        echo "Education level: ".$_POST["edu"]. "<br>"; 
        echo "Special Skill: ".$_POST["skill"]. "<br>";
        echo "Work Experiences: ".$_POST["work"]. "<br>"; 
    }
    ?>
</body>
</html>

