<?php
$webmaster_email = "fanismp@gmail.com";

$return_page = "index.html";

$first_name = $_POST['name'];
$email_address = $_POST['email'];
$comments = $_POST['comment'];
$city = $_POST['city'];
$postal_code = $_POST['postal code'];
$address = $_POST['address'];
$msg = "First Name: " . $first_name . "\r\n" .
	"Email: " . $email_address . "\r\n" .
	"City: " . $city . "\r\n" .
	"Postal Code: " . $postal_code . "\r\n" .
	"Address: " . $address . "\r\n";

mail($webmaster_email, "New message!", $msg, "From $email_address");

header( "Location: $return_page" );
?>