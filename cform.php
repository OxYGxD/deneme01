//PHP code below not JS//

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$message = $_POST['message'];
$formcontent=" From: $name \n Type: $type \n Message: $message";
$recipient = "oguzhansezgin79@gmail.com";
$subject = "Website Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for your message! I will respond as quickly as I can.";
?>