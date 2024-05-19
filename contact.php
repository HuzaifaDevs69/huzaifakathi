<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Your email address
    $to = "huzaifadevstack@gmail.com";  // Replace with your actual email address

    // Email subject
    $email_subject = "New Contact Form Submission: " . $subject;

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    // Headers
    $headers = "From: noreply@yourdomain.com\n"; // Replace with your domain
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to a thank you page (optional)
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
