<?php

    $database= new mysqli("localhost","root","","h_app");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>