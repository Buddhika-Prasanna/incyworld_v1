<?php
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];
    $from = 'FROM: Incylabs.com';
    $to = 'buddhikapbandara@gmail.com';
    $subject = 'contact form';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    echo '<script type="text/javascript">alert("hello!");</script>';

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }

?>