<?php
    #used for connect DB
    $server="Localhost";  // Web server
    $db_username="root";//DB user name
    $db_password="keyocijonaca";//DB password
    $db_name = "travel";//DB name

    $connect = new mysqli($server,$db_username,$db_password,$db_name);//Connect DB
    if(!$connect){
        die("can't connect".mysqli_error());// Connect fail
    }
?>
