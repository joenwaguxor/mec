<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $branch = $_POST['branch']; // Add hidden field for branch
    
    $to = "joenwaguzor@gmail.com"; // Change based on branch
    $headers = "From: $email";
    $email_body = "You have received a new message from $name ($phone).\n".
                  "Branch: $branch\n".
                  "Subject: $subject\n\n".
                  "$message";
    
    mail($to, $subject, $email_body, $headers);
    header('Location: thank-you.html');
}
?>