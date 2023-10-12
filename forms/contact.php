<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can add validation and error handling here.

    // Example: Sending an email
    $to = "johnson.javier@carsu.edu.ph"; // Replace with your email address
    $subject = "New Contact Form Submission: $subject";
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
