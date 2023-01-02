<?php	
	if (empty($_POST['name_18220']) && strlen($_POST['name_18220']) == 0 || empty($_POST['email_18220']) && strlen($_POST['email_18220']) == 0 || empty($_POST['message_18220']) && strlen($_POST['message_18220']) == 0)
	{
		return false;
	}
	
	$name_18220 = $_POST['name_18220'];
	$email_18220 = $_POST['email_18220'];
	$message_18220 = $_POST['message_18220'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_18220: $name_18220 \nEmail_18220: $email_18220 \nMessage_18220: $message_18220 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_18220";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>