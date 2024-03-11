
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate form data (basic validation)
    if (empty($name) || empty($email) || empty($message)) {
    
        echo 'All fields are required.';
    } else {
        $to = 'your_email@example.com';
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $name <$email>";

        // Send email
        if (mail($to, $subject, $body, $headers)) {

            echo 'Thank you for your message. We will get back to you soon.';
        } else {
            echo 'Oops! Something went wrong. Please try again later.';
        }
    }
    } else {
        echo 'Invalid request method.';
    }
    ?>