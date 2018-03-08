<?php
include 'includes/style.min.html';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Prologue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">

    <!--Linking External Stylesheets-->
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/stylee.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/stylle.css">
    
    <!--Linking Icons/Favicons-->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">

<style>
    .down{margin-top:25px;}
    .gap{margin-top:10px;color:yellow!important;background:black!important;}
    .top-bar .thm-btn{margin-top: 10px;}
</style>
</head>
<body>

<div class="boxed_wrapper">

<header class="main-header">
    <div class="top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="top-bar-text float_left"></div>
                <?php
                    if((isset($_GET['login']) == 'success') and isset($_SESSION['name'])){
                        echo '
    <div class="right-column float_right">
     <div class="signin-btn"><span>Signed in as : </span><span class="user-status">'.$_SESSION['name'].'</span><a href="includes/logout.inc.php"><button type="submit" name="logout-btn" class="thm-btn donate-box-btn">LOGOUT</button></a>
     </div>
 </div> 
    ';
} elseif(!isset($_GET['register']) == 'success'){
    echo '
        <div class="right-column float_right">
     <div class="signin-btn"><a href="login.php"><button class="thm-btn donate-box-btn">LOGIN</button></a>
     </div></div>
        ';
}

?>
                
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



<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            
            <li data-transition="fade">
                <img src="images/slider/mass.jpg"  alt="" width="1920" height="580" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="center" data-hoffset="" 
                    data-y="top" data-voffset="200" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box center">
                        <h1>Thrive and let live</h1>
                        <p>Creating a Sustainable Delivery Mechanism <br> to those who need it. </p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="-90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                                 
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="images/slider/2.jpg"  alt="" width="1920" height="580" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="center" data-hoffset="" 
                    data-y="top" data-voffset="200" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box center">
                        <h1>Create to Recreate the world you appreciate</h1>
                        <p> Social entrepreneurship should catalyze our GDP growth to reduce involuntary<br>unemployment  to translate it into public development funds</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="-90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                           
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="images/slider/3.jpg"  alt="" width="1920" height="580" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="center" data-hoffset="" 
                    data-y="top" data-voffset="200" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box center">
                        <h1>Moving the skill matrix to next level</h1>
                        <p>Believing in the principle - Education should be for life<br>and not for books</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="-90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                           
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="90" 
                    data-y="top" data-voffset="375" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <!-- <a class="thm-btn style-3" href="cause.html">our causes</a>      -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 

<section class="blog-section sec-padd2">
    <div class="container">
        <div class="section-title center">
            <h2>What you can do</h2>
        </div>
        <div class="row">
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="images/blog/indexourworldthumbnail.jpg" alt="News" style="border-left:7px solid #a5f533;border-top:7px solid #031209;border-right:7px solid #a5f533;border-bottom:7px solid #031209;"></a>
                        <div class="inner-box">

                        </div>
                        
                    </figure>
                    <div class="lower-content">
                       
                        <div class="content">
                            <center><a href="blog-details.html"><h4>Our world</h4></a></center>					
                        </div>   
		<center><a href="donate.html" class="thm-btn donate-4" style="margin-bottom:15px;">Shop Now</a></center>							
                    </div>
                </div>
                
            </article>
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="images/blog/make.jpg" alt="News" style="border-left:7px solid #a5f533;border-top:7px solid #031209;border-right:7px solid #a5f533;border-bottom:7px solid #031209;"></a>
                        <div class="inner-box">

                        </div>
                        
                    </figure>
                    <div class="lower-content">
                        
                        <div class="content">
                            <center><a href="blog-details.html"><h4>Make dreams come true</h4></a></center>
                        </div>  
	<center><a href="donate.html" class="thm-btn donate-4"style="margin-bottom:15px;">DONATE NOw</a></center>						
                    </div>
                </div>
                
            </article>
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="images/blog/team.jpg" alt="News" style="border-left:7px solid #a5f533;border-top:7px solid #031209;border-right:7px solid #031209;border-bottom:7px solid #a5f533;"></a>
                        <div class="inner-box">

                        </div>
                        
                    </figure>
                    <div class="lower-content">
                        
                        <div class="content">
                           <center><a href="blog-details.html"><h4>Work with us</h4></a></center>
                            
                        </div> 
	<center><a href="career.html" class="thm-btn donate-4"style="margin-bottom:15px;">Join Us</a></center>					
                    </div>
                </div>
                
            </article>
            
        </div>
    </div>
</section>

<section class="about sec-padd2">
    <div class="container">
        <div class="section-title center">
            <h2>About <span class="thm-color">us</span></h2>
        </div>
        <div class="row">
            <article class="col-md-6 col-sm-12 left-column rest">
                <div class="img-box"><iframe width="100%" height="315" src="https://www.youtube.com/embed/zJmrBhfDEaE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div><br><br>           
            </article>
            <article class="col-md-6 col-sm-12 col-xs-12">
                <div class="content">
                    <center><h3>about <span class="thm-color">Prologue</span></h3></center>
					 <div class="text">
                        <p class="p1">

Prologue - A small introduction before a great change! 

 </p>
                    </div>
					
                    <div class="text">
                        <p class="p1">
Prologue took its inception in 2011, capitalizing on the free spirit of students and their undivided patriotism for the country. The synergy of the founding team was channelized to address the problems in government delivery mechanism,  bureaucracy  and redefining the rural education program in 7 villages, which built a huge confidence in the team to register ourselves as a Not for Profit Organization and coined our small student group from Sankalp to Prologue 
 </p>
 
 <div class="link"><a href="about.html" class="thm-btn style-1">Read More</a></div>
                    </div>
					 </div>
                </div>
            </article>
        </div>
        
    </div>
</section>

  <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            	<h2 style="color:#fff;">Are you ready to volunteer?</h2>
                <h3 style="color:#fff;">start one of our programm today and help people in need</h3>
				<p></p>
                <div class="line"></div>
                <a class="theme-btn light-btn donate-box-btn style-9" href="vol.php">BECOME A VOLUNTEER</a>
             
                
            </div>
        </div>
    </section>

<section style="background-image: url(images/slider/.jpg);opacity:0.8;max-width:100%; margin-top:10px;">
<div class="container">
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                           

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center" style="margin-top:90px;">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
												
                                                <p style="color:#000;">I realized that there are many small things that can be done to contribute to child rights. Yes, what is needed is a bit of sensitivity and willingness to do something worthwhile.</p>
                                                <small>Abhinav</small>
												<center><a href="testimonial.html"><button type="button" class="btn btn-danger gap">Read more</button></a></center>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p style="color:#000;">To taken a trivial example, which of 
																				us ever undertakes it laborious 
																			physical exercise works.</p>
                                                <small>manoj</small>
												<center><a href="testimonial.html"><button type="button" class="btn btn-danger gap">Read more</button></a></center>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
</div>
</section>

<section class="call-out">
    <div class="container">
        <div class="float_left">
            <h4 style="color:#000;">STEP A HEAD WITH OUR ORGANIZATION</h4>
        </div>
        <div class="float_right">
            <a href="career.html" class="thm-btn down">join today</a>
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
                <h2>Become a Volunteer</h2>
            </div>

           

            <form action="includes/vol.inc.php" method="post" class="donate-form default-form">
                

                <h3>Volunteer Information</h3>

                <div class="form-bg pop-color">
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
                                <input type="text" name="fname" placeholder="zipcode">
                            </div>
                        </div> 
                        <div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#f3e6e6;" ></span>
            <span class="sr-only"></span>
            <label for="inputMessage" style="color:#f3e6e6;">Enter Your message</label>
                <textarea class="form-control" rows="5" id="message" placeholder="Enter your message"></textarea>  
                </div>
                </div>
                </div>
                </div>
                <div class="center"><button type="button" class="btn btn-warning style">SUBMIT</button></div>
                    
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