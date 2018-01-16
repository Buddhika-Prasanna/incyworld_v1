<?php
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];
    $from = 'FROM: Incylabs.com';
    $to = 'buddhikapbandara@gmail.com';
    $subject = 'contact form';

if(empty($_POST['contact-name'])  	||
    empty($_POST['contact-email']) 	||
    empty($_POST['contact-message'])	||
    !filter_var($_POST['contact-email'],FILTER_VALIDATE_EMAIL))
{
    echo '<script type="text/javascript">alert("No arguments Provided!!");</script>';
    return false;
} else {

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";


    if ($_POST['submit']) {
        if (mail($to, $subject, $body, $from)) {
            echo '<script type="text/javascript">alert("Your message has been sent!");</script>';
        } else {
            echo '<script type="text/javascript">alert("Something went wrong. Please try again!");</script>';
        }
    }
}
?>