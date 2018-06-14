<?php
if (isset($_POST['subscribeBtn'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$email_from = "watlinton@gmail.com";
	$email_subject = "New Subscriber";
	$email_body = "User Name:"." ".$name."\n".
	              "User Email:"." ".$email."\n";

	$to = "watlinton@gmail.com";
	$headers = "From:"." ".$email_from."\r\n";
	$header .= "Reply-To"." ".$email."\r\n";
	mail($to,$email_subject,$headers);
	header('Location:thanks.html');
}
	

?>