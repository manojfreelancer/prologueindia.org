<?php

if(isset($_POST['register-btn'])) {
		include 'db.inc.php';
		$name = htmlspecialchars(($_POST['name']));
		$email = htmlspecialchars(($_POST['email']));
		$password = htmlspecialchars(($_POST['password']));
		$country = htmlspecialchars(($_POST['country']));
		$state = htmlspecialchars(($_POST['state']));
		$city = htmlspecialchars(($_POST['city']));
		$phone = htmlspecialchars(($_POST['phone']));
		$sex = htmlspecialchars(($_POST['sex']));

			if(!empty($name) and !empty($email) and !empty($password) and !empty($country) and !empty($state) and !empty($city) and !empty($phone) and !empty($sex)){

					if(!filter_var($email,FILTER_VALIDATE_EMAIL) or (!preg_match("/^[a-zA-Z ]*$/",$name)) or (!preg_match("/^[0-9]*$/",$phone)) or (!preg_match("/^[a-zA-Z ]*$/",$country)) or (!preg_match("/^[a-zA-Z ]*$/",$state)) or (!preg_match("/^[a-zA-Z ]*$/",$city))){

						header("Location: ../register.php?fields=invalid");
						exit();

					} elseif(filter_var($email,FILTER_VALIDATE_EMAIL) and (preg_match("/^[a-zA-Z ]*$/",$name)) and (preg_match("/^[0-9]*$/",$phone)) and (preg_match("/^[a-zA-Z ]*$/",$country)) and (preg_match("/^[a-zA-Z ]*$/",$state)) and (preg_match("/^[a-zA-Z ]*$/",$city))){

						$sql = "select * from users where email = '$email';";
						$result = mysqli_query($dbConnection,$sql);
						$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0){
								header("Location: ../register.php?user=exists");
								exit();
							} elseif($resultCheck == 0){
								$hashedPassword = password_hash($password,PASSWORD_DEFAULT);

						$sql = "insert into users(name,email,password,country,state,city,phone,sex) values('$name','$email','$hashedPassword','$country','$state','$city','$phone','$sex');";

						$result = mysqli_query($dbConnection,$sql);

						if($result){
							header("Location: ../register.php?register=success");
							exit();
						} elseif(!$result){
							header("Location: ../register.php?register=error");
							exit();
						}
							}
					}

			} elseif(empty($name) or empty($email) or empty($password) or empty($country) or empty($state) or empty($city) or empty($phone) or empty($sex)){

					header("Location: ../register.php?fields=empty");
					exit();
			}
	}

?>