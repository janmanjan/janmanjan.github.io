<?php

if(empty($_POST['send']))
{   
    echo "Message not submitted";
    exit;
}

if(empty($_POST["name"])) ||
    empty($_POST["email"]))
    {
        echo "Almost there"
        exit;
    }


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message_subject = $_POST['subject']
$message = $_POST['message'];
$email_from = 'janmanjan.github.io';
$email_subject = "$message_subject";
$email_body = "Email from $name at $visitor_email.\n".
                            "Message:\n $message".
$to = "m.molina99999@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>