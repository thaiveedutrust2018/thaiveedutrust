<?php
$name = $_POST['name'];
$email= $_POST['mailid'];
$message= $_POST['subject'];
$to = "thaiveedutrust@gmail.com";
$subject = "Mail From Thaiveedutrust";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@thaiveedutrust.org";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thank.html");
?>