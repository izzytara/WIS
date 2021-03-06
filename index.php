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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Link Bootstrap's js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Link Swiper's js-->
    <script src="js/swiper.js"></script>
	</head>

	<!--Here is the body-->
	<body>

    <!--Here is the navigation-->
        <div class="nav-bar">
            <div class="container">               
                <div class="top-nav nav" id="myTopnav">
                    <a class="navbar-brand" href="index.php"><img src="img/LOGO.png" alt="Traval Diary logo"></a>
                    <a class="left " href="explore.php"><p class="lang" key="explore">EXPLORE</p></a>
                    <a class="left " href="mytrip.php"><p class="lang" key="mytravel">MY TRAVEL</p></a>
                    <a class="left "  href="#app"><p class="lang" key="app">APP</p></a>
                    <a class="left "  href="about.php"><p class="lang" key="about">ABOUT US</p></a>                   
                    <a class="right translate" id="cn" href="#"><p class="lang" key="chinese">LANGUAGE</p></a>
                        
                        <!--If user has not loged in-->
                    
                        <?php
                            session_start();
                            if(!$_SESSION['auth']){
                        ?>                               
                            <a class="right" href="#" onclick="document.getElementById('userlogin').style.display='block'"><p class="lang" key="login">LOGIN</p></a>                       
                        <!--If user has not loged in-->
                        <?php
                            }else if($_SESSION['auth']){
                        ?>                                      
                            <a class="right" href="logout.php"><p class="lang" key="logout">LOGOUT</p></a>                                                                                 
                        <?php
                            }
                        ?>                                               
                        
                    
                    <a href="javascript:void(0);" style="font-size:1em;" class="navicon" onclick="myFunction()">&#9776;</a>
                </div>
            </div>
        </div>
        
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
        <div class="content">
    <!--Here is the first swipper to display sample of diary -->
        <div  class="container">
    <!-- Swiper -->
                <div class="swiper-container swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="img-responsive center" src="img/sample.jpg" alt="test1"/></div>
                        <div class="swiper-slide"><img class="img-responsive center" src="img/Topadvertising.jpg" alt="test1"/></div>
                        <div class="swiper-slide"><img class="img-responsive center" src="img/Topadvertising3.jpg" alt="test1"/></div>
                    </div>
    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div><div class="swiper-button-prev"></div>
               </div>
    <!--buttons-->
                <div class="button center">
                    <p class="tcenter"><a href="design.php" class="btn lang" key="start"><span id="start-icon" class="glyphicon glyphicon-edit"></span>Start Your Diary</a>
                    </p>
                </div>
            </div>
   
        
    
    <!--Here is popular works display container
        <div id="popular-works" class="container white">
            <div class="diary-display">
                <div class="photo">
                    <img class="img-responsive" src="img/test-photo.jpg" alt="placeholder">
                </div>
                <div class="diary">
                    <div class="location">
                        <p>
                            <span class="glyphicon glyphicon-map-marker"></span>
                            <span>Locatoin</span>
                        </p>
                    </div>                    
                    <div class="title">
                        <p>Title: <span>My First Trip at Thailand</span></p>
                    </div>
                    
                    <div class="author-date">
                        <p>By:<span>Amy</span>Date:<span>2017-05-23</span></p>
                    </div>
                    
                    <div class="text">
                        <p>For our last two night.......</p>
                    </div>                
                </div>                           
            </div>

            <div class="vote-like">
                    <p>
                        <a href="#"><span class="glyphicon glyphicon-heart"></span></a>
                        <a href="#"><span>369</span>Like</a>
                        <a href="#"><span class="glyphicon glyphicon-share"></span></a>   
                    </p>  
            </div>
        </div>-->

    <!--Here is the first display container-->
        <div class="container green">
            <p>
                <img class="img-responsive center" src="img/step1.png" alt="Step 1 choose your location"/>
            </p>
        </div>
    
    <!--Here is the second display container-->
        <div class="container white">               
                <p>
                    <img class="img-responsive center" src="img/step2.png" alt="Step 2 Upload your pictures"/>
                </p>
            </div>
    <!--Here is the third display container-->
        <div class="container green center">
                
                <p class="tcenter">
                    <img class="img-responsive center" src="img/step3.png" alt="Step 3 My Blog Post"/>
                </p>
                <!--buttons-->
                <div class="button center">
                    <p class="tcenter"><a href="design.php" class="btn"><span class="glyphicon glyphicon-edit start-icon"></span>Start Your Diary</a>
                    </p>
                </div>
            </div>
    
    <!--Here is the fourth display container-->
            <div class="container white">
                <p class="tcenter">
                    <img id="app" class="img-responsive center" src="img/advertisinglastpicture.png" alt="app promotion picture"/>
                </p>
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
        
        <!--Here starts to build muli-language translation -->
    <!-- Add language dictionary with English and Chinese(Simple)-->
    <script type="text/javascript">
        var arrLang = {
            'en': {
                'explore': 'EXPLORE',
                'mytravel': 'MY TRAVEL',
                'app': 'APP',
                'about': 'ABOUT US',
                'chinese': 'Language',
                'login': 'LOGIN',
                'logout': 'LOGOUT',
                'start': 'Start Your Diary'
            },
            'cn': {
                'explore': '探索',
                'mytravel': '我的日记',
                'app': '手机APP',
                'about': '关于我们',
                'chinese': '中文',
                'login': '登入',
                'logout': '登出',
                'start': '开始记录'
            }
        };

        // Function to achieve lanague swith between English and Simple Chinese(Simple)-->
        $(function () {
            $('.translate').click(function () {
                var lang = $(this).attr('id');

                $('.lang').each(function (index, element) {
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
            });
        });
    </script>

	</body>
</html>
