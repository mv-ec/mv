<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "shafic074@gmail.com"; // Replace with your email address
    $subject = "Message from $name";
    $body = "From: $name\nEmail: $email\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
