<?php
include('src/functions.php');
session_start();
$id = $_SESSION['id'];
$name = $_POST['nam'];
$from = $_POST['from'];
$sub = $_POST['sub'];
$mess = $_POST['mess'];
$to = "piyush.bhutoria98@gmail.com";
$head = 'From: ' . $name . "\r\n" .
	'Reply to: ' . $from . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
$mail = mail($to, $sub, $mess, $head);
if ($mail) {
	alert_and_redirect("Sent Sucessfully", "index.php");
} else {
	alert_and_redirect("Retry!", "contact.php");
}
