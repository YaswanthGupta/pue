<?php

    $to = "tejaswielectricalsengineering@gmail.com";  // Your email here
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
    $headers = "From: $from";
	$subject = "Contact Form TEE site";
   
    $fields = array();
    $fields{"name"} = "First name";
    $fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
    $fields{"message"} = "Message";
	

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
