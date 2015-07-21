<?php	
	if(empty($_POST['inquiry-name']) || empty($_POST['inquiry-city']) || empty($_POST['inquiry-email']) || empty($_POST['inquiry-availability']))
	{
		return false;
	}
	
	$inquiry-name = $_POST['inquiry-name'];
	$inquiry-city = $_POST['inquiry-city'];
	$inquiry-email = $_POST['inquiry-email'];
	$inquiry-availability = $_POST['inquiry-availability'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from stafford-roofing.";
	$email_body = "You have received a new message. \n\n".
				  "Inquiry-Name: $inquiry-name \nInquiry-City: $inquiry-city \nInquiry-Email: $inquiry-email \nInquiry-Availability: $inquiry-availability \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>