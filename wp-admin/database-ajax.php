<?php

$tel_number = $_GET['tel_number'];
$your_email = $_GET['your_email'];
$text_area = $_GET['textarea'];


$servername = "localhost";
$username = "lotuswlc_whitelo";
$password = "whitelotus@123";
$dbname = "lotuswlc_whitelotus";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
	
$sqlquery = "INSERT INTO wp_wp_support (textarea, tel_number, your_email)
VALUES ('".$text_area."', '".$tel_number."', '".$your_email."')";
	
	

if ($conn->query($sqlquery) === TRUE) {
// 	echo "record inserted successfully";
    $mail_txt = 'telephone:-'.$tel_number."\r\n".'email:-'.$your_email."\r\n".'message:-'.$text_area;

    mail('contact@whitelotuscorporation.com','Quick Enquiry',$mail_txt);
	print_r($_GET);
	die;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
