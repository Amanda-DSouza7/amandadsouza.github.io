<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "amanda.kuttu05@gmail.com"; // Replace with your actual email address
    $headers = "From: $email";

    $mailBody = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>
