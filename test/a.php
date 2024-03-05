<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Reaksa Yi</title>

    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<style>
    body{
        
        background: linear-gradient(to left, lightblue, burlywood);
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
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

        <form class="form-horizontal" method="post" action="b.php">
        <fieldset>

        <!-- Form Name -->
        
        <legend><i class='bx bx-book-heart'>Maxorize Co,Ltd</i></legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="jobpos">Job position</label>  
        <div class="col-md-4">
        <input id="jobpos" name="jobpos" type="text" placeholder="" class="form-control input-md" autofocus required="">
            
        </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="prefix">Prefix</label>
        <div class="col-md-4"> 
            <label class="radio-inline" for="prefix-0">
            <input type="radio" name="prefix" id="prefix-0" value="Mr." checked="checked">
            Mr.
            </label> 
            <label class="radio-inline" for="prefix-1">
            <input type="radio" name="prefix" id="prefix-1" value="Ms.">
            Ms.
            </label> 
            <label class="radio-inline" for="prefix-2">
            <input type="radio" name="prefix" id="prefix-2" value="Mss.">
            Mss.
            </label>
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="fullname">Fullname</label>  
        <div class="col-md-4">
        <input id="fullname" name="fullname" type="text" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Search input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="date">Date of Birth</label>
        <div class="col-md-4">
            <input id="date" name="date" type="date" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="edu">Education Level</label>
        <div class="col-md-4">
            <select id="edu" name="edu" class="form-control">
            <option value="Undergraduate">Undergraduate</option>
            <option value="Bachelor's degree">Bachelor's degree</option>
            <option value="Master's degree">Master's degree</option>
            <option value="Doctorate degree">Doctorate degree</option>
            </select>
        </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="skill">Special skill</label>
        <div class="col-md-4">                     
            <textarea class="form-control" id="skill" name="skill" rows="5" cols="5"></textarea>
        </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="work">Experience of work</label>
        <div class="col-md-4">                     
            <textarea class="form-control" id="work" name="work"></textarea>
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="Submit" type ="submit" name="Submit" class="btn btn-primary">Save</button>
        </div>
        </div>

        </fieldset>
        </form>

    <hr>
   
    

</body>
</html>