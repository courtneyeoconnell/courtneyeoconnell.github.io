<?php	
	if(empty($_POST['request-name']) || empty($_POST['request-email']) || empty($_POST['request-phone']) || empty($_POST['request-address']) || empty($_POST['request-city']) || empty($_POST['request-zip']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['message3']))
	{
		return false;
	}
	
	$request-name = $_POST['request-name'];
	$request-email = $_POST['request-email'];
	$request-phone = $_POST['request-phone'];
	$request-address = $_POST['request-address'];
	$request-city = $_POST['request-city'];
	$request-zip = $_POST['request-zip'];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$message3 = $_POST['message3'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from stafford-roofing.";
	$email_body = "You have received a new message. \n\n".
				  "Request-Name: $request-name \nRequest-Email: $request-email \nRequest-Phone: $request-phone \nRequest-Address: $request-address \nRequest-City: $request-city \nRequest-Zip: $request-zip \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \nMessage3: $message3 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $request-email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>