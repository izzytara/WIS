<!doctype html>
<html lang="en">
	<!--Here is the head-->
	<head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Diary</title>
    <link rel="stylesheet" href="css/main.css">
    
    <!-- Link Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.css">
        
    <!-- Link Bootstrap's CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Link Bootstrap's js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Link Siper's js-->
    <script src="JS/swiper.js"></script>
    
	</head>

	<!--Here is the body-->
	<body>

      <!--Here is the navigation-->
        <div class="nav-bar">
            <div class="container">               
                <div class="top-nav nav" id="myTopnav">
                    <a class="navbar-brand" href="index.php"><img src="img/LOGO.png" alt="Traval Diary logo"></a>
                    <a class="left" href="explore.php"><p>EXPLORE</p></a>
                    <a class="left" href="mytrip.php"><p>MY TRAVEL</p></a>
                    <a class="left" href="index.php#app"><p>APP</p></a>
                    <a class="left" href="about.php"><p>ABOUT US</p></a>               
                    <a class="right" href="#"><p>LANGUAGE</p></a>
                        <!--<li class="right"><a href="#"><span class="glyphicon glyphicon-list"></span></a> -->
                        
                        <!--If user has not loged in-->
                    
                        <?php
                            session_start();
                            if(!$_SESSION['auth']){
                        ?>                               
                            <a class="right" href="#" onclick="document.getElementById('userlogin').style.display='block'"><p>LOGIN</p></a>                       
                        <!--If user has not loged in-->
                        <?php
                            }else if($_SESSION['auth']){
                        ?>                                      
                            <a class="right" href="logout.php"><p>LOGOUT</p></a>                                                                                 
                        <?php
                            }
                        ?>                                               
                        
                    
                    <a href="javascript:void(0);" style="font-size:1em;" class="navicon" onclick="myFunction()">&#9776;</a>
                </div>
            </div>
        </div>
        
        <!--JavaScript for responsive mobile navigation-->
        <!--JavaScript for responsive mobile navigation-->
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "top-nav nav") {
                    x.className += " responsive";
                } else {
                    x.className = "top-nav nav";
                }
            }     
        </script>
 
    <!--Here is the login form-->
    <div id="userlogin" class="modal">
            <div class="login">
                <form class="modal-content animate" action="login.php" method="post">
                    <h2 class="tcenter">Login</h2>
                    <span onclick="document.getElementById('userlogin').style.display='none'" class="close" title="Close Modal">&times;</span>

                        <div class="loginform center">
                            <label><b>Username</b></label>
                            <br>
                            <input class="center" type="text" placeholder="Enter username" name="username" required>
                            <br>
                            <label><b>Password</b></label>
                            <br>
                            <input class=" center" type="password" placeholder="Enter password" name="password" required>
                            <br>
                        </div>
                        <p class="tcenter"><button class="btn" type="submit" name="signup">Sign up</button><button class="btn" type="submit" name="login">Log in</button></p>
                    
                </form>
            </div>
        </div>

    <!--Here is the content-->
    <div id="aboutus" class="content">
        <div  class="container">
            <img class="img-responsive img1" src="img/about%20us4.jpg" alt="about us title">
            <img class="img-responsive img2" src="img/about%20us5.jpg" alt="about us">
        </div>
        <div class="container">
            <img class="img-responsive img3" src="img/about%20us1-2.jpg" alt="Yi Fengji's profile">
            <img class="img-responsive img4" src="img/about%20us2-2.jpg" alt="Jing Zhang's profile">
            <img class="img-responsive img5" src="img/about%20us3-2.jpg" alt="Wei Fu's profile">
        </div>
    </div>
    <!--Here is the footer-->
    
    
        <div class="footer">
            <div class="container">
                 &copy; Copyright 2017
            </div>
        </div>


    
	</body>
</html>
