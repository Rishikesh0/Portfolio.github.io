<?php
 
$name = $_REQUEST['name'];
$email= $_REQUEST['email'];
$message= $_REQUEST['message'];
$number = $_REQUEST['sub'];




if (empty($name) || empty($email) || empty($message) || empty($number) )
{
    echo "Please Fill all the Fields";
}
else
{
    mail("prajakta8307@gmail.com", "Message",$message, $number, "From: $name <$email>" );
    echo "<script type='text/javascript'>alert('Message sent successfully');
        window.history.log(-1)    
    </script>";
}



// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['message'];
// $number = $_POST['sub'];

// $to = "prajakta8307@gmail.com";

// $subject = "Mail";
// $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

// $headers = "From: prajakta8307@gmail.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// //redirect
// header("Location:contact.html");
?>

