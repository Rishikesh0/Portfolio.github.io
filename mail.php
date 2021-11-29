<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['sub'];

$to = "prajakta8307@gmail.com";

$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

$headers = "From: prajakta8307@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>