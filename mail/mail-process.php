<?php
	if(isset($_POST['submit-btn'])){
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$to='manojfreelanceacc@gmail.com';
$subject='testing mail functionality';
$message="Name : ".$name."/n"."Email : ".$email."/n"."Message : ".$msg;
$headers="From : ".$email;
	
	if(mail($to,$subject,$message,$headers)){
echo 'message sent successfully!';
	} else{
echo 'mail support error';
	}
}
?>