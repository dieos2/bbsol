<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HeadAsset;
use app\assets\BottomAsset;
use yii\widgets\Alert;
use app\models\Setup;
use app\models\User;
use app\models\Perfil;
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model app\models\Sala */


HeadAsset::register($this);
//$modelUsers =  User::findByUsername(Yii::$app->user->identity->username) 
?>
<?php BottomAsset::register($this);    ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Saratov - Kindergarten HTML Template | Home Style One</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

        <?php $this->head() ?>
</head>
<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        
        <!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!--Top Left-->
            	<div class="top-left pull-left">
                	<ul class="links-nav clearfix">
                    	<li><span class="icon fa fa-envelope-o"></span><a href="#">Info@Kindergarten.com</a></li>
                        <li><span class="icon fa fa-phone"></span><a href="#">Call Us Now : 1800 123 4567</a></li>
                    </ul>
                </div>
                
                <!--Top Right-->
            	<div class="top-right pull-right">
                	<ul class="links-nav clearfix">
                    	<li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">En &ensp;<span class="icon fa fa-caret-down"></span></a>
                        	<ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                <li><a href="#">English</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Hindi</a></li>
                            </ul>
                        </li>
                    	<li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
                	
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>
                    
                <div class="nav-outer clearfix">
                
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <!--Left Nav-->
                            <ul class="navigation left-nav clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Classes</a>
                                    <ul>
                                        <li><a href="classes.html">Classes</a></li>
                                        <li><a href="classes-single.html">Alphabet matching</a></li>
                                        <li><a href="classes-single.html">Letter matching</a></li>
                                        <li><a href="classes-single.html">Color matching</a></li>
                                        <li><a href="classes-single.html">Little Stars</a></li>
                                        <li><a href="classes-single.html">Smart Turtles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                    	<li><a href="teachers.html">Teachers</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--Right Nav-->
                            <ul class="navigation right-nav clearfix">
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
        	</div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Classes</a>
                                    <ul>
                                        <li><a href="classes.html">Classes</a></li>
                                        <li><a href="classes-single.html">Alphabet matching</a></li>
                                        <li><a href="classes-single.html">Letter matching</a></li>
                                        <li><a href="classes-single.html">Color matching</a></li>
                                        <li><a href="classes-single.html">Little Stars</a></li>
                                        <li><a href="classes-single.html">Smart Turtles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                    	<li><a href="teachers.html">Teachers</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
   
    

        <?php $this->beginBody() ?>
        <?= Html::csrfMetaTags() ?>
      <?= $content ?>
        <?php if (isset($this->blocks['modals'])): ?>
            <?= $this->blocks['modals'] ?>
        <?php else: ?>
            <!-- no modals -->
        <?php endif; ?>
            
        <?php $this->endBody() ?>
       
       
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/pattern-2.png);">
    	<div class="auto-container">
        	<!--widgets section-->
            <div class="widgets-section">
                <div class="row clearfix">
                
                	<!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	<!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget logo-widget">
                                	<div class="footer-logo">
                                    	<a href="index.html"><img src="images/logo-2.png" alt="" /></a>
                                    </div>
									<div class="widget-content">
                                    	<div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaproi-dent, sunt in culpa qui officia dese deserunt...</div>
                                        <ul class="social-links-two">
                                        	<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li class="google-plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
									</div>
								</div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<!--Links Widget-->
                                <div class="footer-widget links-widget">
                                	<div class="footer-title">
                                    	<h2>Quick Links</h2>
                                    </div>
                                	<div class="widget-content">
                                    	<ul class="list">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Classes</a></li>
                                            <li><a href="#">Teachers</a></li>
                                            <li><a href="#">Latest News</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
									</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        
                        	<!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<!--Links Widget-->
                                <div class="footer-widget links-widget">
                                	<div class="footer-title">
                                    	<h2>Categories</h2>
                                    </div>
                                	<div class="widget-content">
                                    	<ul class="list">
                                            <li><a href="#">Painting</a></li>
                                            <li><a href="#">Drawing</a></li>
                                            <li><a href="#">Sports, Games</a></li>
                                            <li><a href="#">Life Science</a></li>
                                            <li><a href="#">Activities & Events </a></li>
                                        </ul>
									</div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	
                                <div class="footer-widget subscribe-widget">
                                    <div class="footer-title">
                                    	<h2>News letter</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="newsletter-form">
                                            <form method="post" action="contact.html">
                                                <div class="form-group">
                                                    <input type="text" name="name" value="" placeholder="Name *" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="Email Id" required="">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="theme-btn btn-style-one">SUBSCRIBE</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--Footer Bottom-->
            <div class="footer-bottom">
            	<div class="row clearfix">
                	<div class="column col-md-6 col-sm-6 col-xs-12">
                    	<div class="copyright">&copy; Copyrights 2017 Saratov. All Rights Reserved</div>
                    </div>
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                    	<div class="cards"><img src="images/icons/visa-cards.png" alt="" /></div>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?php $this->endPage() ?>
