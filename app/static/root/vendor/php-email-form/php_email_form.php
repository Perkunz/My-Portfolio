<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "ighokarop@gmail.com";

    //Set mail subject

    $subject = "Message from $name";
    
    // Set email headers
    $headers = "From $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

    //Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
