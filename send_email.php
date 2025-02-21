<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hussnainahmed143ha@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    $fullMessage = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
