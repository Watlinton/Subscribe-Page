<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	mail('watlinton@gmail.com', 'New Subscriber', 
		'New Subscriber: Name:\n$name Email:$email');
	header('Location:thanks.html');

?>