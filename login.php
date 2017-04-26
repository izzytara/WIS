<?php
    header("Content-Type: text/html; charset=utf8");
    #used for login
    if(isset($_POST["login"])){//Check login has been clicked
        include('Connect.php');//Connect DB
        $name = $_POST['username'];         
        $password = $_POST['password'];     
        $salt = INFS;
        $hash_password = hash('sha256', $salt.$password);//Password hash function
        if ($name && $password){//Check username and password both not null
            $sql = "SELECT * FROM travel_user WHERE uname = '$name' AND hash_password ='$hash_password'";//Check username and password in sql DB
            $result1 = mysqli_query($connect, $sql);//Run sql
            $rows1 = mysqli_num_rows($result1);//Check true or false
            if($rows1){//If username or passward is right
                session_start();//Set session
                $_SESSION['Username'] = "$name";
                $_SESSION['auth'] = true;
                echo "<script>alert('Log in success！');history.go(-1);</script>"; 
            }
            else{//If username or passward is wrong
                echo "<script>alert('Wrong username or password！'); history.go(-1);</script>";                                     
            }      
        }
        else{//If username or passward is empty
            echo "<script>alert('You must provide your username and password！'); history.go(-1);</script>";     
        }
        mysqli_close($connect);//Close DB
    }
    
    #used for signup
    else if (isset($_POST['signup'])){//Check signup has been clicked
        include('Connect.php');//Connect DB
        $name=$_POST['username'];                 
        $password=$_POST['password'];             
        $salt = INFS;
        $hash_password = hash('sha256', $salt.$password);//Password hash function                 
        $sql_check = "SELECT uname FROM travel_user WHERE uname = '$name'";  
        $result2 = mysqli_query($connect, $sql_check);//Run sql   
        $rows2 = mysqli_num_rows($result2);//Chect true or false
        if($rows2){//If username has been registed
            echo "<script>alert('Sorry, username has been registed, please try another username'); history.go(-1);</script>";  
        }else{
            if($name == "" || $password == ""){//If username or passward is empty   
                echo "<script>alert('Please provide username and password！'); history.go(-1);</script>";  
            } 
            else{
                $q="INSERT INTO travel_user(uid,uname,salt,hash_password) VALUES (null,'$name','$salt','$hash_password')";
                $reslut3=mysqli_query($connect, $q);     
                if (!$reslut3){//If signup error
                    die('Error: ' . mysqli_error());   
                }else{//If signup success
                    echo "<script>alert('Signup Success!'); history.go(-1);</script>";
                }
                mysqli_close($connect);//Close DB
            }
        } 
    }
?>