<?php
    include 'lib/user.php';


    $user = new User();

?>

<?php
    $loginmsg = Session::get("loginmsg");
    if (isset($loginmsg)) {
        echo $loginmsg;
    }
    Session::set("loginmsg", NULL);
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Carbazar</title>
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
               
                    <div class="navbar-header">
                    
                        <a class="navbar-brand" href="#">Carbazar</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                           
                            <li><a class="color_animation" href="login.php" target="_blank" >LOGIN/SIGNUP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Carbazar</h2>
                    <h2 class="white second-title">Buy Best Car</h2>
                    <hr>
                </div>
            </div>
        </div>

        

    

        <!-- Footer -->

        <footer class="sub_footer">
            <div class="container">
            	<div class="col-md-6"><p style="text-align: left; color: #FFFFFF"><a href="https://www.facebook.com/Raselhossain120" target="_blank" style="color:#FFFFFF;"> MD.Rasel Hossain </a><br>Dhaka,Bangladesh</p> </div>
                <div class="col-md-6""><p class="sub-footer-text""><a href="#top" style="color:#FFFFFF;">TOP</a></p>
                </div>
            </div>
        </footer>

       

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>