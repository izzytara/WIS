<!doctype html>
<html lang="en">
	<!--Here is the head-->
	<head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Diary</title>
    <link rel="stylesheet" href="css/main.css">

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
                <ul class="nav">
                    <li class="left"><a href="#explore">Explore</a></li>
                    <li class="left"><a href="#">My travel</a></li>
                    <li class="left"><a href="#app">APP</a></li>
                    <li class="left"><a href="#aboutus">About us</a></li>
                    <li class="left"><a href="index.html">Logo</a></li>
                    <li class="right"><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
                    <li class="right">
                    <div class="dropdown">
                        <?php
                            session_start();
                            if(!$_SESSION['auth']){
                        ?>
                        <div class="dropdown">
                            <a href="#" class="dropbtn" onclick="document.getElementById('userlogin').style.display='block'"><span class="glyphicon glyphicon-user"></span></a>
                        </div>
                        <?php
                            }else if($_SESSION['auth']){
                        ?>     
                            <div class="dropdown">
                            <a href="#" class="dropbtn"><span class="glyphicon glyphicon-user"></span></a>
                            </div>           
                            <div class="dropdown-content">
                            <form method="post" action="logout.php">
                            <button type="submit" name="logout">Logout</button>
                            </form>
                            </div>
                        <?php
                            }
                        ?> 
                    </div>                    
                    </li>
                </ul>
            </div>
        </div>
        
    <!--Here is the login form-->
        <div id="userlogin" class="modal">
            <div class="login">
                <form class="modal-content animate" action="login.php" method="post">
                    <h2 class="tcenter">Login</h2>
                    <div class="imgcontainer">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <br>
                        <input type="text" placeholder="Enter username" name="username" required>
                        <br>
                        <label><b>Password</b></label>
                        <br>
                        <input type="password" placeholder="Enter password" name="password" required>
                        <br>
                        <p class="tcenter"><button class="btn" type="submit" name="signup">Sign up</button>&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn" type="submit" name="login">Log in</button></p>
                    </div>
                </form>
            </div>
        </div>

    <!--Here is the content-->
        <div class="content">
            <div class="container">
    <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="img-responsive" class="imgSize280" src="img/placeholder.gif" alt="test1"/></div>
                        <div class="swiper-slide"><img class="img-responsive" class="imgSize280" src="img/placeholder.gif" alt="test1"/></div>
                        <div class="swiper-slide"><img class="img-responsive" class="imgSize280" src="img/placeholder.gif" alt="test1"/></div>
                        <div class="swiper-slide"><p class="tcenter">Coming soon!</p></div>
                    </div>
    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div><div class="swiper-button-prev"></div>
            </div>
    <!--buttons-->
                <p class="tcenter"><a href="#" class="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp Start</a>
                </p>
            </div>

    <!--Here is the first display container-->
            <div class="container green">
                <p>
                    <img class="img-responsive" src="img/placeholder.gif" alt="placeholder"/>
                </p>
            </div>
    
    <!--Here is the second display container-->
            <div id="explore" class="container white">
                <h2>Explore</h2>
                <p>
                    <img class="img-responsive" src="img/placeholder.gif" alt="placeholder"/>
                </p>
            </div>
    <!--Here is the third display container-->
            <div id="app" class="container green center">
                <h2>APP</h2>
                <p class="tcenter">
                    <img class="img-responsive" src="img/placeholder.gif" alt="placeholder"/>
                </p>
            </div>
    
    <!--Here is the fourth display container-->
            <div id="aboutus" class="container white">
                <h2>About US</h2>
            </div>
        </div>

  	<!--Here is the footer-->
        <div class="footer">
            <div class="container">
                &copy; Copyright 2017
            </div>
        </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true
        });
    </script>
        
    <script>
    //get the modal
        var modal = document.getElementById('userlogin');
    //when the user clicks anywhere out side the modal, close it
        window.onclick = function(event){
            if (event.target == modal){
            modal.style.display = "none";
        }
    }
    </script>

	</body>
</html>
