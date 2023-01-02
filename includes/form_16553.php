<?php	
	if (empty($_POST['name_16553']) && strlen($_POST['name_16553']) == 0 || empty($_POST['email_16553']) && strlen($_POST['email_16553']) == 0 || empty($_POST['message_16553']) && strlen($_POST['message_16553']) == 0)
	{
		return false;
	}
	
	$name_16553 = $_POST['name_16553'];
	$email_16553 = $_POST['email_16553'];
	$message_16553 = $_POST['message_16553'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_16553: $name_16553 \nEmail_16553: $email_16553 \nMessage_16553: $message_16553 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_16553";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>