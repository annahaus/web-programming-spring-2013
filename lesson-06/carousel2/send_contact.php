<?php
$to = 'ahausfeld@bearcubs.santarosa.edu';
$subject = "Contact Form";
$message = $_POST['customername'] . ' wants a discovery session';
$headers = 'From: annahaus100@gmail.com' . "\r\n" .
	'Reply-To: annahaus100@gmail.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
