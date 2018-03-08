<?php include 'includes/style.min.html';?>

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
	<link rel="stylesheet" href="css/stylle.css">
	<link rel="stylesheet" href="css/animate.css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">

	<style>
    .down{margin-top:25px;}
    .gap{margin-top:10px;color:yellow!important;background:black!important;}
</style>
</head>
<body>
		<div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Become a Volunteer</h2>
            </div>

           

            <form action="includes/vol.inc.php" method="post" class="donate-form default-form">
                

                <h3>Volunteer Information</h3>
<span>
<?php
	if(isset($_GET['register']) == 'success'){
    echo '<center><span class="pass">You Have Registered as Volunteer</span></center>';
} elseif(isset($_GET['register']) == 'error'){
    echo '<center><span class="fail">Oops, Something Went Wrong</span></center>';
} elseif(isset($_GET['fields']) == 'empty'){
    echo '<center><span class="fail">Please fill all the fields properly</span></center>';
} elseif(isset($_GET['fields']) == 'invalid'){
    echo '<center><span class="fail">Please Enter valid Characters</span></center>';
} elseif(isset($_GET['user']) == 'exists'){
    echo '<center><span class="fail">Volunteer with the same email address exists</span></center>';
}
?>
</span>

                <div class="form-bg pop-color">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <input type="text" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
							
                                <input type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="addrs" class="form-control" id="Address" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                        </div> 
						
						<div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="zip" placeholder="zipcode">
                            </div>
                        </div> 
                        <div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#f3e6e6;" ></span>
            <span class="sr-only"></span>
            <label for="inputMessage" style="color:#f3e6e6;">Enter Your message</label>
                <textarea class="form-control" rows="5" id="message" placeholder="Enter your message" name="message"></textarea>  
                </div>
                </div>
                </div>
                </div>
                <div class="center"><button type="submit" name="vol-btn" class="btn btn-warning style">SUBMIT</button></div>
                    
            </form>
        </div>
        </div>
	</body>
	</html>