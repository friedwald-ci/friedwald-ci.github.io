<?php	
	if (empty($_POST['name_29102']) && strlen($_POST['name_29102']) == 0 || empty($_POST['email_29102']) && strlen($_POST['email_29102']) == 0 || empty($_POST['message_29102']) && strlen($_POST['message_29102']) == 0)
	{
		return false;
	}
	
	$name_29102 = $_POST['name_29102'];
	$email_29102 = $_POST['email_29102'];
	$message_29102 = $_POST['message_29102'];
	$optin_29102 = $_POST['optin_29102'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_29102: $name_29102 \nEmail_29102: $email_29102 \nMessage_29102: $message_29102 \nOptin_29102: $optin_29102 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_29102";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>