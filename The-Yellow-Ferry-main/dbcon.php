<?php

    $con = mysqli_connect("localhost", "root", "","db_practice1");

    if(!$con){
        die('Connection Failed!'. mysqli_connect_error());
    }
?>