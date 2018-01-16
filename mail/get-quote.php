<?php
/**
 * Created by PhpStorm.
 * User: buddhikaprasanna
 * Date: 16/1/18
 * Time: 3:18 PM
 */

// check if fields passed are empty
if(empty($_POST['guote-name'])  	||
    empty($_POST['quote-email']) 	||
    empty($_POST['quote-phone'])	||
    empty($_POST['inputService'])	||
    empty($_POST['inputBudget'])	||
    empty($_POST['inputTime'])	    ||
    empty($_POST['explanation'])	||
    !filter_var($_POST['quote-email'],FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript">alert("No arguments Provided!!");</script>';
    return false;
} else {

    $name = $_POST['guote-name'];
    $email = $_POST['quote-email'];
    $phone = $_POST['quote-phone'];
    $service = $_POST['inputService'];
    $budget = $_POST['inputBudget'];
    $time = $_POST['inputTime'];
    $explanation = $_POST['explanation'];

    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Service: $service\n Budget: $budget\n Time: $time\n Explanation:\n $explanation";


    $to = 'incy@incyworld.com';
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new quote request from your website contact form.\n\n" . "From: $name\n E-Mail: $email\n Phone: $phone\n Service: $service\n Budget: $budget\n Time: $time\n Explanation:\n $explanation";;
    $headers = "From: GET-QUOTE-FORM@YOUR-WEBSITE.com\n"; // ****ENTER WHO YOU WANT THE MESSAGE TO BE FROM HERE****
    $headers .= "Reply-To: $email";
    mail($to, $email_subject, $email_body, $headers);
    echo '<script type="text/javascript">alert("Message sent successfully!");</script>';
    return true;
}
?>