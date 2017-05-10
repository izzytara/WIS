<!doctype html>
<html lang="en">
	<!--Here is the head-->
	<head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Diary</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/design.css">
        

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.css">
        
    <!-- Link Bootstrap's CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                
                <p class="tcenter">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/LOGO.png" alt="Traval Diary logo">
                    </a>
                </p>
                               
                <div class="navbar-collapse collapse">
                    <ul class="nav">
                        <li class="left active"><a href="#explore">EXPLORE</a></li>
                        <li class="left"><a href="#">MY TRAVEL</a></li>
                        <li class="left"><a href="#app">APP</a></li>
                        <li class="left"><a href="#aboutus">ABOUT US</a></li>                    
                        <li class="right"><a href="#">LANGUAGE</a></li>
                        <li class="right">                           
                        <!--If user has not loged in-->
                        <?php
                            session_start();
                            if(!$_SESSION['auth']){
                        ?>                               
                            <a href="#" onclick="document.getElementById('userlogin').style.display='block'">LOGIN</a>                       
                        <!--If user has not loged in-->
                        <?php
                            }else if($_SESSION['auth']){
                        ?>                                      
                            <a href="logout.php">LOGOUT</a>                                                                                 
                        <?php
                            }
                        ?>                                               
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    <!--Here is the login form-->
    <div id="userlogin" class="modal">
            <div class="login">
                <form class="modal-content animate" action="login.php" method="post">
                    <h2 class="tcenter">Login</h2>

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
    <div class="content">
        
<!--*****The form starts here*******-->
        <form>
    <!--Here is the Step1 container-->
            <div id="step1" class="container green">
                <div class="design-outside">
                    <h3 class="tcenter">1. Choose Location</h3>
                    <div class="design-inside center">

                        <div class="step-instruct"><p class="tcenter">Please chick you current location from the Google Map</p></div>
                        <div class="design-area">
                            <img class="img-responsive center" src="img/location.png" alt="google map"/>
                        </div>
                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step1nav.png" alt="step1 nav progress bar"/></p>
                    </div>

                </div>
            </div>


        <!--Here is the Step2 container-->

            <div id="step2" class="container white">
                <div class="design-outside">
                    <h3 class="tcenter">2. Upload Your Pictures</h3>
                    <div class="design-inside center">

                        <div class="step-instruct"><p class="tcenter">Please choose your photograph from your mobile or computer</p></div>


                        <div class="design-area">
                            <img id="upload-img" class="img-responsive center" src="img/upload%20image.png" alt="upload photo"/>
                            <p class="tcenter"><button class="btn" type="submit" name="signup">Upload</button></p>


                        </div>              
                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step1nav.png" alt="step1 nav progress bar"/></p>
                    </div>      
                </div>
            </div>



        <!--Here is the third display container-->
            <div id="step3" class="container green">
                <div class="design-outside">
                    <h3 class="tcenter">3. My Blog Post</h3>
                    <div class="design-inside center">

                        <div class="step-instruct">

                        </div>
                        <div class="design-area textarea">
                            <textarea class="center" rows="1" cols="60" placeholder="Write your title "></textarea>
                            <label></label>
                            <textarea class="center" rows="11" cols="60" placeholder="Write in your journal here"></textarea>
                            <p class="tcenter"><button class="btn" type="submit" name="signup">Done</button></p>
                        </div>

                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step1nav.png" alt="step1 nav progress bar"/></p>
                    </div>

                </div>
            </div>
        </form>
<!--*****The form ends here*******-->
    
    
    </div>
    <!--Here is the footer-->
    
    <div class="footer">
        <div class="container">
                &copy; Copyright 2017
        </div>
    </div>

    
	</body>
</html>
