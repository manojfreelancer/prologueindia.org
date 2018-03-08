<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title> 
	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/stylee.css">
	<link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <style>
        .register-form{width:100%;margin-left: 25%;}
        .main-header .info-box .icon-box{padding-top: 0;}
        .main-header .social-links-one a{padding-top: 0;}
    </style>
</head>
<body>
<div class="boxed_wrapper">
<header class="main-header">
    <div class="top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="top-bar-text float_left">
                </div>
                <div class="right-column float_right">
                    <div class="signin-btn"><a href="login.php"><button class="thm-btn donate-box-btn">LOGIN</button></a></div>
                </div>
             </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="container">
            <div class="clearfix">
                
                <div class="pull-left logo-outer">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo/opp.png" alt=""></a>
                    </div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        <ul>
                             <a href="donate.html" class="thm-btn style-3 donate-4">DONATE NOW</a>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <ul>
                             <a href="register.php" class="thm-btn style-3">REGISTER HERE</a>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="social-links-one">
                            <a href="https://www.facebook.com/Prologueindia/ "><span class="fa fa-facebook-f"></span></a>
                            <a href="https://twitter.com/PrologueNgo"><span class="fa fa-twitter"></span></a>
                            <a href="https://plus.google.com/u/0/117453677617415840747 "><span class="fa fa-google-plus"></span></a>
                            <a href="https://www.linkedin.com/company/prolouge-association/"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>   
</header>

<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9 menu-column">
                <nav class="defaultmainmenu" id="main_menu">
                   <ul class="defaultmainmenu-menu">
                        <li><a href="index.php">Home</a></li>

                        <li class=""><a href="about.html">About Us</a>
                        <ul class="dropdown">
                            <li><a href="vision.html">vision and mission</a></li>
                            <li><a href="team.html">Meet Our Team</a></li>
                            <li><a href="volunteer.html">Join as Volunteer</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                         </ul>
                        </li>


                        <li><a href="event.html">Events</a>
                        <ul class="dropdown">
                           
                         </ul>
                        </li>

                        <li><a href="gallery.html">Gallery</a>
                        <ul class="dropdown">
                            
                         </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>

                    </ul>
                </nav> 
            </div>
            <div class="right-column">

                <div class="nav_side_content">
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <div class="search_option">
                        <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                            <input type="text" placeholder="Search...">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                   </div>
               </div>
                    
            </div>


        </div>
                

   </div>
</section>

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Register Here</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                   
                </li>

                <li>
                    Register Here
                </li>
            </ul>
        </div>
       
    </div>
</div>

<?php

//Register
if(isset($_GET['register']) == 'success'){
    echo '<center><span class="pass">You Have Successfully Registered</span></center>';
} elseif(isset($_GET['fields']) == 'empty'){
    echo '<center><span class="fail">Please fill all the fields properly</span></center>';
} elseif(isset($_GET['register']) == 'error'){
    echo '<center><span class="fail">Oops, Something went wrong</span></center>'; 
} elseif(isset($_GET['user']) == 'exists'){
    echo '<center><span class="fail">User Already Exists</span></center>'; 
} elseif(isset($_GET['fields']) == 'invalid'){
    echo '<center><span class="fail">Please enter Valid Characters</span></center>'; 
}
?>


    <section class="register-section sec-padd-top">
    <div class="container">
        <div class="row">
            
            
            
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
            <div class="register-form">
                <div class="section-title2">
                    <h3>Register Now</h3>
                </div>
                
                <!--Login Form-->
                <div class="styled-form register-form">
                    <form action="includes/register.inc.php" method="post">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="name" value="" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="email" value="" placeholder="Enter Mail id *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="password" value="" placeholder="Enter Password *">
                        </div>
						 <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="text" name="country" value="" placeholder="Country*">
                        </div>
						 <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="text" name="state" value="" placeholder="State*">
                        </div>
						 <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="text" name="city" value="" placeholder="City *">
                        </div>
						 <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="tel" name="phone" value="" placeholder="Phone*">
                        </div>
						<label class="radio-inline">
  <input type="radio" name="sex" value="female"> Female
</label>
<label class="radio-inline">
  <input type="radio" name="sex" value="male"> Male
</label>
				
						<br>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" name="register-btn" class="thm-btn thm-tran-bg" style="margin-top:10px;">Register here</button>
                            </div>
                            <div class="form-group padd-top-15 pull-right">
                                * Free registered user to submit content.  
                            </div>
                        </div>
                    </form>
					 
                </div>
            </div>
            </div>
            
        </div>
    </div>
</section>


<footer class="main-footer">
    
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                   
                        <!--Footer Column-->
                       <div class="col-md-4 col-sm-4 col-xs-12">

                            <div class="footer-widget about-column">
                                <div class="section-title">
                                    <a href="index.php"><img src="images/logo/opp.png" alt=""></a>
                                </div>
                                
                                <div class="text"><p>We started Prologue in the year 2011, back then all the board members were engineering students. All the founding members of NGO were like minded and worked towards the cause of upbringing of the lower income groups.</p> </div>
                                <div class="link"><a href="about.html" class="default_link">Read More <i class="fa fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-widget link-column">
                                <div class="section-title">
                                    <h4>about us</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="about.html">About Our Donation</a></li>
                                    
                                        <li><a href="volunteer.html">Our Volunteers</a></li>
                                        <li><a href="donate.html">Our Donators</a></li>
                                        <li><a href="career.html">careers</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                        
                        <!--Footer Column-->
                        <div class="col-md-4 col-sm-4 col-xs-12">

                            <div class="footer-widget contact-widget">
                                <div class="section-title">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="widget-content">
                                
                                    <ul class="contact-info">
                                        <li><div class="icon-box"><span class="icon-arrows"></span></div>Hyderabad</li>
                                        <li><div class="icon-box"><span class="icon-phone"></span></div>+919394999292 &	+919848089079 </li>
                                        <li><div class="icon-box"><span class="icon-back"></span></div>	prologuengo@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                    
                    </div>
                </article>
                
             </div>
         </div>
     </div>
     
</footer>
<!--Footer Bottom-->                    
 <section class="footer-bottom">
    <div class="container">
        <p class="center"><a href="#">Copyrights © 2018</a> All Rights Reserved by <span style="color:#fff;">Prologue</span></a></p>
    </div><!-- /.container -->
</section>                                     
    <!-- Scroll Top  -->
    <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
    <!-- preloader  -->
    <div class="preloader"></div>
    <div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner">


    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h4>How much would you like to donate:</h4>

            <form  action="#" class="donate-form default-form">
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="radio" id="donate-amount-1" name="donate-amount" />
                        <label for="donate-amount-1" data-amount="1000" >$1000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                        <label for="donate-amount-2" data-amount="2000">$2000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-3" name="donate-amount" />
                        <label for="donate-amount-3" data-amount="3000">$3000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-4" name="donate-amount" />
                        <label for="donate-amount-4" data-amount="4000">$4000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="5000">$5000</label>
                    </li>
                    <li class="other-amount">

                        <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                            <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"  />
                        </div>
                    </li>
                </ul>

                <h3>Donor Information</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Phone">
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Additional Note">
                            </div>
                        </div>

                    </div>
                </div>

                <ul class="payment-option">
                    <li>
                        <h4>Choose your payment method:</h4>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Paypal</span>
                            </label>
                        </div>
                    </li>
                    <li>
                       <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Offline Donation</span>
                            </label>
                        </div> 
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Credit Card</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Debit Card</span>
                            </label>
                        </div>
                    </li>
                </ul>

                <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>
                    
            </form>
        </div>
    </div>
  
    </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/imagezoom.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <script src="js/jquery.polyglot.language.switcher.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script> 
    <script src="js/wow.js"></script> 
    <script src="js/jquery.fitvids.js"></script> 
    <script src="js/nouislider.js"></script> 
    <script src="js/isotope.js"></script> 
    <script src="js/jquery.bootstrap-touchspin.js"></script> 
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    <!-- revolution slider js -->
    <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>

    <script src="js/custom.js"></script>
</div>   
</body>
</html>     
<?php include 'includes/style.min.html';?>       