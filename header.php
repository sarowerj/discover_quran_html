<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discover Quran</title>

        <!-- Stylesheet for Bootstrap Core CSS-->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Stylesheet for Bootstrap Dropdown Select -->
        <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- Stylesheet for Fontwasome -->
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Animate Css-->
        <link rel="stylesheet" href="css/animate.css" /> 

        <!-- Stylesheet for Audio Media Player -->
        <link rel="stylesheet" href="css/mediaelementplayer.min.css" />

        <!-- Stylesheet for Google Fonts (Open Sans, Roboto Condensed)-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Stylesheet for theme styling -->
        <link href="css/style.css" rel="stylesheet">


        <!-- jQuery v3.1.0 -->
        <script src="js/jquery-1.12.1.min.js"></script> 

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Header Section -->
        <header>
            <!-- Top Bar Section -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="padding_10_640 forty_640 col-xs-7 col-sm-6 col-md-5 col-lg-3">
                            <span class="text">Active Visitors: 2392</span>
                        </div>
                        <div class="padding_10_640 col-xs-1 ten_640 text-center">

                        </div>
                        <div class="padding_10_640 half_640 col-xs-4 col-sm-5 col-md-3 col-lg-1 col-lg-offset-1"> 
                        </div>
                        <div class="hidden-xs hidden-sm col-md-3 col-lg-6 text-right">
                            <a href="javascript:void(0)" class="btn btn-default dark"><i class="fa fa-star"></i></a>
                            <span class="selection_modal btn btn-default dark" data-toggle="modal" data-target="#question_modal">Change <span class="hide_640">your</span> question</span>
                            <img src="images/select_language_icon.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div><!-- End Top Bar-->

            <!-- Banner Section -->
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo.png" alt="" class="img-responsive"/></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-8 col-md-8 col-lg-6 text-right hidden-xs">
                            <div class="hadith">
                                <p> "And whoever seeks a religion other than Islâm, it will never be accepted
                                    of him, and in the Hereafter he will be one of the losers." (V. 3:85) </p>
                            </div>
                            <div class="mener sj" data-animate="fadeInUp" data-animation-delay="300">
                                <img src="images/mosque_mener.svg" alt="" class="img-responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Banner Section -->
        </header><!-- End Header -->

        <!-- Nav bar Section -->
        <nav class="navbar navbar-default main_navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">Navigation</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="quran_translation_english.php">Quran Translation in English</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="software.php">Software</a></li>
                        <li><a href="how_to_be_a_muslim.php">How to become a muslim</a></li>
                        <li><a href="contact.php">Contact Us </a></li>
                    </ul> 
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- End Navbar -->