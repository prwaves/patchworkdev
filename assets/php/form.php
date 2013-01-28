<?php
/**
 * Simple email script that sends you a email with subscribers email address.
 */


// Set the email you'd like to receive mail to.

$email   = "alvarez.peter.14@gmail.com";




////////////// END SETTINGS///////////////

$errors = 0;

$from    = trim($_POST['email']);

if(empty($from)){
	$errors = 1;
}

if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $from)) {
    $errors = 1;
} 

if(isset($_POST)){

	$subject = "PATCHWORK DEV: Contact Form Submission";

	$name   = trim($_POST['name']);

	$message = trim($_POST['message']);
	
	$message = "<b>Name:</b> " . $name . "<br/>" . "<b>Email:</b> " . $from . "<br/><b>Message:</b><br/>" . $message;
	
	if($errors == 0){
		 
	
		if(mail($email,$subject,$message,"Content-type: text/html;\r\nFrom: contact@patchworkdev.com")){

			echo "Thanks for reaching out!<br/>I will reply as soon as possible.";

		}else{

			echo "There was a problem, please try again.";
		}
		
	}else{
		
		echo "Setup not completed.";
	}
}
?>
