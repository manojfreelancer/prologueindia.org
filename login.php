<?php include 'includes/style.min.html';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Donation</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Slab'>
    <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/styley.css">
    <link rel="stylesheet" href="css/responsive.css">

	
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">

 <style>
body {
 
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0.2px auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#000;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
	padding-bottom:10%;
  margin:0% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
	width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color:#f2f2f2;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:#E86850;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:#f2f2f2;
  text-decoration:underline;
  cursor:pointer;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}
 </style>
}
 

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
                        <a href="index.php"><img src="images/logo/logo.png" alt=""></a>
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
                            <a href="https://www.facebook.com/Prologueindia/"><span class="fa fa-facebook-f"></span></a>
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
                            <li><a href="about.html">vison and mission</a></li>
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
            <h1>Login</h1>
        </div>
    </div>
</div>
<section style="background: url(imagess/Mpsg2b.jpg); opacity:0.9;";>


<div class="login">
  <!--<div class="login-header">
    <h1></h1>
  </div> -->
  <div class="login-form">
<?php    
// Login
 if(isset($_GET['user']) == 'in-valid'){
    echo '<center><span class="fail">Invalid User Details</span></center>'; 
} elseif(isset($_GET['password']) == 'incorrect'){
    echo '<center><span class="fail">Wrong Password</span></center>';
} else {
  echo '<span class="php"> </span>';
}
?>
    <form action="includes/login.inc.php" method="post">
      <h3>Email:</h3>
      <input type="text" name="email" placeholder="Email"/><br>
      <h3>Password:</h3>
      <input type="password" name="password" placeholder="Password"/>
      <br>
      <div class="form-group pull-left">
          <button type="submit" name="login-btn" class="thm-btn thm-tran-bg" style="margin-left:25px;">login now</button>
        </div>
      <br>
      
      <br>
      <h6 class="-access">Can't access your account?</h6>
    </form>
  </div>
</div>



</section>

<!--Footer Bottom-->                    
 <section class="footer-bottom">
    <div class="container">
        <p class="center"><a href="donate.html">Copyrights © 2017</a> All Rights Reserved. Powered by <a href="#">Donation</a></p>
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

                <div class="center"><button class="thm-btn" type="submit" name="donate-btn">Donate Now</button></div>
                    
            
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
    <script src="js/login.js"></script>
</div>
</body>
</html>                 