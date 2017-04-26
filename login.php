<?php
    header("Content-Type: text/html; charset=utf8");
    #used for login
    if(isset($_POST["login"])){
        if(!isset($_POST["login"])){
            exit("ERROR");
        }                                   //Judfe submit option 
        include('Connect.php');             //Connect DB
        $name = $_POST['username'];         //Get username
        $password = $_POST['password'];     //Get passport
        $salt = INFS;
        $hash_password = hash('sha256', $salt.$password);
        if ($name && $password){        //check username and password both not null
            $sql = "SELECT * FROM travel_user WHERE uname = '$name' AND hash_password ='$hash_password'";  //Check username and password in sql DB
            $result = mysql_query($sql, $connect);                                                      //Run sql
            $rows = mysql_num_rows($result);                                                  //Return result
            if($rows){//0 false 1 true
                session_start();
                $_SESSION['Username'] = "$name";
                $_SESSION['auth'] = true;
                echo "<script>alert('Log in success！');history.go(-1);</script>"; 
            }
            else{
                echo "<script>alert('Wrong username or password！'); history.go(-1);</script>";                                     
            }      
        }
        else{                //If username or passward is empty
            echo "<script>alert('You must provide your username and password！'); history.go(-1);</script>";     
        }
        mysql_close();      //Close DB
    }
    
    #used for signup
    else if (isset($_POST['signup'])){
        if(!isset($_POST['signup'])){
            exit("ERROR");
        }                                         //Judfe submit option
        $name=$_POST['username'];                 //Get signup username
        $password=$_POST['password'];             //Get signup password
        $salt = INFS;
        $hash_password = hash('sha256', $salt.$password);
        include('Connect.php');                   //connect to DB
        $sql_check = "SELECT uname FROM travel_user WHERE uname = '$name'";  
        $result2 = mysql_query($sql_check);    
        $num = mysql_num_rows($result2);  
        if($num){              
            echo "<script>alert('Sorry, username has been registed, please try another username'); history.go(-1);</script>";  
        }else{
            if($name == "" || $password == ""){  
                echo "<script>alert('Please provide username and password！'); history.go(-1);</script>";  
            } 
            else{
                $q="insert into travel_user(uid,uname,salt,hash_password) values (null,'$name','$salt','$hash_password')";// Add value into DB
                $reslut=mysql_query($q, $connect);     //Run ql
                if (!$reslut){
                    die('Error: ' . mysql_error());   //If run error_log(message)
                }else{
                    echo "<script>alert('Signup Success!'); history.go(-1);</script>";
                }
                mysql_close();                    //Close DB
            }
        } 
    }
?>