<?php

error_reporting(0);

/*	Your settings: */

$your_email_address = 'solarman.awm@gmail.com';
$your_subject = 'Email from "Biss HTML Tempalte" contact form...';

header('ContentType: text/xml');
echo '<?xml version="1.0" encoding="UTF8" standalone="yes"?>';
echo '<response>';

$sender_type = ( $_GET['type'] == 1) ? 'General enquiry' : 'Proposed project';
$sender_name = $_GET['name'];
$sender_email = $_GET['email'];
$sender_company = $_GET['company'];
$sender_phone = $_GET['phone'];
$sender_subject = '[' . $sender_type . '] ' . $your_subject;
$sender_message = $_GET['message'] . '<br><br>' . 'By ' . $sender_company . ', phone: ' . $sender_phone;

// Sent email
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = "From: $sender_name <$sender_email>";
$headers[] = "Reply-To: $sender_name <$sender_email>";
$headers[] = "Subject: {$sender_subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

if (mail($your_email_address, $sender_subject, $sender_message, implode("\r\n", $headers))) {
	echo '<span>Email sent successfully!</span>';
}

echo '</response>';
?>