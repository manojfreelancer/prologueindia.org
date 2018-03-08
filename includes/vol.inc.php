<?php

if(isset($_POST['vol-btn'])) {
		include 'db.inc.php';
		$fname = htmlspecialchars(($_POST['fname']));
		$lname = htmlspecialchars(($_POST['lname']));
		$email = htmlspecialchars(($_POST['email']));
		$addrs = htmlspecialchars(($_POST['addrs']));
		$phone = htmlspecialchars(($_POST['phone']));
		$zip = htmlspecialchars(($_POST['zip']));
		$message = htmlspecialchars(($_POST['message']));

			if(!empty($fname) and !empty($lname) and !empty($email) and !empty($addrs) and !empty($phone) and !empty($zip) and !empty($message)){

					if(!filter_var($email,FILTER_VALIDATE_EMAIL) or (!preg_match("/^[a-zA-Z ]*$/",$fname)) or (!preg_match("/^[a-zA-Z ]*$/",$message)) or (!preg_match("/^[a-zA-Z0-9 ]*$/",$addrs)) or (!preg_match("/^[a-zA-Z ]*$/",$lname)) or (!preg_match("/^[0-9]*$/",$phone)) or (!preg_match("/^[0-9]*$/",$zip))){

						header("Location: ../vol.php?fields=invalid");
						exit();

					} elseif(filter_var($email,FILTER_VALIDATE_EMAIL) and (preg_match("/^[a-zA-Z ]*$/",$fname)) and (preg_match("/^[a-zA-Z ]*$/",$lname)) and (preg_match("/^[a-zA-Z ]*$/",$addrs)) and (preg_match("/^[a-zA-Z ]*$/",$message)) and (preg_match("/^[0-9]*$/",$phone)) and (preg_match("/^[0-9]*$/",$zip))){

						$sql = "select * from vols where email = '$email';";
						$result = mysqli_query($dbConnection,$sql);
						$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0){
								header("Location: ../vol.php?user=exists");
								exit();
							} elseif($resultCheck == 0){

						$sql = "insert into vols(fname,lname,email,addrs,phone,zip,message) values('$fname','$lname','$email','$addrs','$phone','$zip','$message');";

						$result = mysqli_query($dbConnection,$sql);

						if($result){

									$vol_name = $fname.'&nbsp;'.$lname;
									$vol_email = $email;
									$vol_phone = $phone;
									$vol_addrs = $addrs;
									$vol_zip = $zip;
									$vol_message = $message;

									$to='manojfreelanceacc@gmail.com';
									$subject='New volunteer registered';
									$message='<h2>Volunteer Details</h2>
									<h4>Name </h4><p>'.$vol_name.'</p>
									<h4>Email </h4><p>'.$vol_email.'</p>
									<h4>Phone </h4><p>'.$vol_phone.'</p>
									<h4>Address </h4><p>'.$vol_addrs.'</p>
									<h4>Zip Code </h4><p>'.$vol_zip.'</p>
									<h4>Message </h4><p>'.$vol_message.'</p>';
									
									/*$headers = "MIME-Version: 1.0"."\r\n";
									$headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";*/
									$headers .= "From: ".$vol_name. "<".$vol_email.">";

								if(mail($to,$subject,$message,$headers)){
									header("Location: ../vol.php?register=success");
									exit();
								} elseif(!mail($to,$subject,$message,$headers)){
									header("Location: ../vol.php?mail=un-supported");
									exit();
								}
								}
						} elseif(!$result){
							header("Location: ../vol.php?register=error");
							exit();
						}
							}
					}

			} elseif(empty($fname) or empty($lname) or empty($email) or empty($addrs) or empty($phone) or empty($zip) or empty($message)){

					header("Location: ../vol.php?fields=empty");
					exit();
			}

?>