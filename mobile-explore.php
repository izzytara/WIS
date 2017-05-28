<?php
    header("Content-Type: text/html; charset=utf8");
    include('Connect.php');
    $popular = "SELECT * FROM travel_story order by `popular` DESC LIMIT 10;";
    $arr = array();
    $popularres = mysqli_query($connect, $popular);
    while($popular1 = mysqli_fetch_assoc($popularres)){
    	array_push($arr,$popular1);
    }
    echo json_encode($arr); 
?>