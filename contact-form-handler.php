<?php
	$name = $_POST['firstName'];
	$surname = $_POST['surname'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'liam.fudge@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "First Name: $name.\n".
					"Surname: $surname.\n".
					"User Email: $visitor_email.\n".
					"User MEssage: $message.\n";


	$to = "liam.fudge@gmail.com";

	$headers = "Form: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html");
?>