<?php


if($_POST["message"]) {


mail("oguzhansezgin79@gmail.com", "Here is the subject line",


$_POST["Mesajınız iletildi."]. "From: an@email.address");


}


?>