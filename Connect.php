<?php
    #used for connect DB
    $server="Localhost";  // Web server
    $db_username="root";//DB user name
    $db_password="keyocijonaca";//DB password
    $db_name = "travel";//DB name

    $connect = mysql_connect($server,$db_username,$db_password,$db_name);//Connect DB
    if (!$connect) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysql_select_db('travel', $connect);
?>
