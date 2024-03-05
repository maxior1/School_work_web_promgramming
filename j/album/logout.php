<?php
    session_start();
    include("album/connectdb.php");
    unset( $_SESSION ["aid"]);
    unset( $_SESSION ["aname"]);
    
    echo"<script>";
    echo"window.location='album/index.php';";
    echo"</script>";
?> 
