<?php
	
	if(isset($_POST['login-btn'])){
			include 'db.inc.php';
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);

				if(!empty($email) and !empty($password)){
					$sql = "select * from users where email = '$email';";
					$result = mysqli_query($dbConnection,$sql);
					$resultCheck = mysqli_num_rows($result);

						if($resultCheck > 0){
							// Verify hashed password
							$fetchedData = mysqli_fetch_assoc($result);
							$hashedPassword = $fetchedData['password'];
							$dehashedPassword = password_verify($password,$hashedPassword);

							if($dehashedPassword == true){
								session_start();
								$_SESSION['name'] = $fetchedData['name'];
								header("Location: ../index.php?login=success");
								exit();
							} elseif($dehashedPassword == false){
								header("Location: ../login.php?password=incorrect");
								exit();
							}

						} elseif($resultCheck == 0){
							header("Location: ../login.php?user=in-valid");
							exit();
						}

				} elseif(empty($email) or empty($password)){
					header("Location: ../login.php?fields=empty");
					exit();
				}
	}
?>