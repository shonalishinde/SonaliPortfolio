<?php

$name = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$message = $_GET['message'];

if( empty($name) || empty($email) || empty($subject) || empty($message) ) {
    echo "Please the all details";
}
else {
    $to = "shindeshonna19@gmail.com";
    $email_sub = "Message from site";
    $email_body = "You have received a new message.".
                  "Here are the details:\n Name: $name \n ".
                  "Email: $email_address\n Message : $message \n";
    $headers = "From : Portfolio";

    if ( mail($to, $email_sub, $email_body, $headers) )
    {
    echo "<script type='text/javascript'> alert('Your Message has been successfully sent to Sonali. Thank you!'); window.history.log(-1); </script>";
    }
    else
        echo "<script type='text/javascript'> alert('Cannot send'); window.history.log(-1); </script>";
}
?>
