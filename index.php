<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>
<head>
    <title>GROOMING PARLOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .request {
            background-image: url(images/appledown.ico);
        }

        .match {
            background-image: url(icons/requst.ico);
        }

        .pay {
            background-image: url(icons/requst.ico);
        }

        .served {
            background-image: url(icons/requst.png);
        }

        .work {
            background-image: url(icons/requst.ico);
        }

        .bodywise {
            background-image: url(images/website.jpg);
        }

        #about_us ul li, #how_it_works li, #about_us p {
            font-size: 1.6em;

        }

        .jumbotron img {
            display: inline;
            size: cover;
        }

        #AboutUs {
            color: #9d9d9d;
            text-align: center;
            padding: 0;
            margin: 0;
            font-size: 0.875em !important;
        }

    </style>
</head>
<body>
<div class="bodywise">
    <nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GROOMING PARLOR</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="html/index.php">Book Job</a></li>
                    <li><a href="#about_us">about Us</a></li>
                    <li><a href="#AboutUs">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                    <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    <p style="color: white">
                        <?php
//
//                        if (isset($_SESSION['user']) && isset($_SESSION['username'])) {
//                            echo $_SESSION['username'];
//                        } else {
//                            echo "undefined";
//                        }
                        ?>
                    </p>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-user"></span>Sign Up<span class="caret"></span></a>
                        <ul class="dropdown-menu thedropdown">
                            <li><a href="html/clientregistration.php">Client</a></li>
                            <li><a href="html/workerregistration.php">Worker</a></li>
                        </ul>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                        <ul class="dropdown-menu thedropdown">
                            <li><a href="html/index.php">Client</a></li>
                            <li><a href="html/workerindex.php">Worker</a></li>
                        </ul>
                </ul>
            </div>
        </div>

    </nav>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="page-header">
            <h1>Welcome to the GROOMING PARLOR Fixem!</h1>
        </div>
        <div class="">
            <img class="img-responsive" src="images/Salon3.jfif">
            <!--<img  class="img-responsive" src="images/juakali2.jpg">-->
            <!--<img  class="img-responsive" src="images/juakali4.jpg">-->
        </div>
        <div id="about_us">
            <p>Hallo and welcome to the GROOMING PARLOR<br>Has your life ever come to a stand still simply because you
                needed work done and did not have the right person for the job?<br>Well worry no more because we here at
                the Experts have you covered.<br>We at Grooms.com will work to ensure that you get the best service to
                suite your needs <br>
                we will offer you the following services</p>
            <legend>Joblist</legend>
            <ul>
                <li>Hairdressing</li>
                <li>Facial</li>
                <li>Pedicure</li>
                <li>Kinyozi</li>
                <li>Manicure</li>
                <li>Eyebrows</li>
                <li>...And many More...</li>
            </ul>
            </legend>
        </div>
        <div>

        </div>
        <div id="how_it_works">
            <legend>How the system works</legend>
            <ol>
                <li><span><img src="icons/request_32.png"></span> Simlpy apply</li>
                <li><img src="icons/Search_32.png"></span>We find a match for you</li>
                <li><img src="icons/Cash_in_hand_32.png"></span>Make the Payment</li>
                <li><img src="icons/Businessman_48px.png"></span>Get served</li>
                <li><img src="icons/Receive_Cash_32.png"></span>Your Worker gets paid</li>
            </ol>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<footer class=" site-footer navbar navbar-inverse  container-fluid">
    <div id="theContent">
        <div class="col-md-3 col-sm-3">

        </div>
        <div class="gridInfo col-md-3 col-sm-3">
            <!--<h5>Help & support</h5>
            <ul >
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact US</a></li>
            </ul>-->
            <div id="AboutUs">
                <h5> ABOUT US </h5>

                <strong>
                    <p> We are located at 1st floor Diamond Plaza in 3rd Parklands.</p>
                    <br/>
                    <p> Our opening times are as follows: </p> <br/>
                    <p> Weekdays: 8 a.m. to 5 p.m. </p>
                    <p> Saturdays: 9 a.m. to 1 p.m. </p>

                    <br/>
                    <p> Our contact numbers and email are as follows: </p> <br/>
                    <p> 1). 0726798038 </p>
                    <p> 2). 0795436843 </p>
                    <p> 3). marymutiso18@gmail.com </p>
                </strong>

            </div>
        </div>

        <div class="gridInfo col-md-3 col-sm-3">
            <h5>Social Media</h5>
            <ul>
                <li><img src="icons/Facebook_32.png"></span></li>
                <li><img src="icons/Twitter_32.png"></span></li>
                <ul>
        </div>
    </div>
</footer>
</body>
</html>
