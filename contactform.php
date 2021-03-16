<?php

if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['clientEmail'];
    $phone = $_POST['clientPhone'];
    $sessionType = $_POST['sessionType'];
    $message = $_POST['message'];

    $mailTo = "jess.gilleran@gmail.com";
    $subject = "Website Inquiry";
    $headers = "From: ".$firstName;
    $body = "You have received an inquiry from your website contact form.\n\n
    First name: ".$firstName."\n"."Last name: ".$lastName."\nEmail: ".$email.
    "\nPhone number: ".$phone."\nSession type: ".$sessionType."\nMessage: ".$message;


    mail($mailTo,$subject,$body,$headers);
    header("Location: index.php?mailsend");
}

?>