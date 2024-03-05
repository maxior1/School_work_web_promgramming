<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Reaksa Yi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>

<div class="row">
  <div class="col-md-2"></div>

  <div class="col-md-8">
  <form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Max's Form</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Prefix</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="prefix" id="radios-0" value="Mr." checked="checked">
      Mr
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="prefix" id="radios-1" value="Ms.">
      Ms
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="prefix" id="radios-2" value="Mss.">
      Mss
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">Fullname:</label>  
  <div class="col-md-4">
  <input id="fullname" name="fullname" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Major</label>
  <div class="col-md-4">
    <select id="major" name="major" class="form-control">
      <option value="Accounting">Accounting</option>
      <option value="Marketing">Marketing</option>
      <option value="General Management">General Management</option>
      <option value="Business Computer">Business Computer</option>
      <option value="Business Information Technology">Business Information Technology</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="Submmit" type="submit" name="Submmit" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
    </form>
  </div>

  <div class="col-md-2">.</div>
</div>
    
    
 
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