<?php
    session_start();
    if(empty($_SESSION ["aid"])){
        echo"<h1>Access denied</h1> ";
        exit;
    }

?> 