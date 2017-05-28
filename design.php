<!doctype html>
<html lang="en">
	<!--Here is the head-->
	<head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Diary</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/design.css">
    <!-- Link Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.css">
        
    <!-- Link Bootstrap's CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Link Bootstrap's js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Link Siper's js-->
    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
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
                    <a class="left "  href="index.php#app"><p class="lang" key="app">APP</p></a>
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
        
<!--*****The form starts here*******-->
        
    <!--Here is the Step1 container-->
        <form class="design-form" action="upload.php" method="post" enctype="multipart/form-data">
            <div id="step1" class="container green">
                <div class="design-outside">
                    <h3 class="tcenter lang" key="location">1. Choose Location</h3>
                    <div class="design-inside center">

                        <div class="step-instruct"><p class="tcenter lang" key="map">Please chick you current location from the Google Map</p></div>
                        <div id="map" class="design-area"></div>
                        <!--map api-->
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM4uETuyFU5KzjRyn1-aZYy-xnH6jJwzg&callback=myMap" type="text/javascript"></script>
                        <!--Get location POST-->
                        <input id="location" name="location" style="color:black" type="hidden">
                        
                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step1nav.png" alt="step1 nav progress bar"/></p>
                    </div>

                </div>
            </div>


        <!--Here is the Step2 container-->
            
            <div id="step2" class="container white">
                <div class="design-outside">
                    <h3 class="tcenter lang" key="upload">2. Upload Your Pictures</h3>
                    <div class="design-inside center">

                        <div class="step-instruct"><p class="tcenter lang" key="choose">Please choose your photograph from your mobile or computer</p></div>


                        <div class="design-area">
                            <img id="upload-img" class="img-responsive center" src="img/upload%20image.png" alt="upload photo"/>
                            <p class="tcenter"><input type="file" name="file" id="file"/></p>
                        </div>              
                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step2nav.png" alt="step1 nav progress bar"/></p>
                    </div>      
                </div>
            </div>
            




        <!--Here is the third display container-->
            <div id="step3" class="container green">
                <div class="design-outside">
                    <h3 class="tcenter lang" key="blog">3. My Blog Post</h3>
                    <div class="design-inside center">
                        <div class="design-area textarea center">
                            <textarea class="center textarea-small" rows="1" cols="60" name="title" placeholder="Write your title here." required></textarea>
                            <br>
                            <textarea class="center textarea-large" rows="11" cols="60" name="story" placeholder="Write in your journal here." required></textarea>
                            <p class="tcenter"><button class="btn lang" key="done" type="submit">Done</button></p>
                        </div>

                    </div>
                    <div class="stepbar"><p class="tcenter">
                        <img class="img-responsive center" src="img/step3nav.png" alt="step1 nav progress bar"/></p>
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
                'location': '1. Choose Location',
                'map': 'Please chick you current location from the Google Map',
                'upload': '2. Upload Your Pictures',
                'choose': 'Please choose your photograph from your mobile or computer',
                'blog':'3. My Blog Post',
                'done':'Done'
            },
            'cn': {
                'explore': '探索',
                'mytravel': '我的日记',
                'app': '手机APP',
                'about': '关于我们',
                'chinese': '中文',
                'login': '登入',
                'logout': '登出',
                'location': '1. 选择您的位置',
                'map': '请点击谷哥地图确定您的位置',
                'upload': '2. 上传您的图片',
                'choose': '请从电脑或手机选择图片并上传',
                'blog':'3. 我的日记',
                'done':'完成'
            }
        };

        //        Function to achieve lanague swith between English and Simple Chinese(Simple)-->
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
