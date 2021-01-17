<?php 
if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    $subject =$_POST['subject'];
    $mailFrom =$_POST['mail'];
    $message =$_POST['message'];

    $mailto ="oguzhansezgin79@gmail.com";
    $headers=" From ".$mailFrom;
    $txt = "Bir Messajınız var".$name.".\n\n".$message;

    mail($mailto,$subject,$txt,$headers);
    header("Location: contact.php?mailsend");
?>