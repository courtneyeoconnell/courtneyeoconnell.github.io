<?php	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone-number']) || empty($_POST['message']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone-number = $_POST['phone-number'];
	$message = $_POST['message'];
	
	$to = 'jeff@staffordroof.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from stafford-roofing.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nPhone-Number: $phone-number \nMessage: $message \n";
	$headers = "From: contact@staffordroof.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>