<?php

    $myemail = 'thailia.r@thaichology.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = $myemail;
    $subject = "Contact from submission";
    $body = "You have received a new message. Here are the details.";

    $body .= "\r\n Name: " . $name;
    $body .= "\r\n Email: " . $email;
    $body .= "\r\n Message: " . $message;

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email";

    mail($to, $subject, $body);
    header('Location: index.html');

?>