<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Reaksa Yi</title>


</head>
<body>
    <h1>Max's Form</h1> <br>
    <form method="post" action="">
        <input type="radio" name="prefix" value="Mr. " checked>Mr. 
        <input type="radio" name="prefix" value="Ms.">Ms. 
        <input type="radio" name="prefix" value="Mss.">Mss. <br>
        Fullname: <input type="text" name="fullname" autofocus required> <br>
        Major:
        <select name="major" id="">
            <option value="Accounting">Accounting</option>
            <option value="Marketing">Marketing</option>
            <option value="Management">General Management</option>
            <option value="Business Computer">Business Computer</option>
            <option value="Business Information Technology">Business Information Technology</option>
            

        </select>

        Address: <textarea name="address" rows="5" cols="30"></textarea>


        <button type ="submmit" name ="Submmit">Save</button>
    </form> 
    <hr>
    <?php
    if (isset($_POST["Submmit"])) {
        echo "Fullname: ".$_POST["prefix"],$_POST["fullname"]. "<br>";
        echo "Major: ".$_POST["major"]. "<br>"; 
        echo "Address: ".$_POST["address"];
    }
    ?>
    

</body>
</html>