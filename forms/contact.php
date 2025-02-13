<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send the email (using PHP's mail function)
    $to = "info@yourdomain.com"; // Replace with your valid email address
    $subject = "New Quote Request from $name";
    $body = "
        Name: $name
        Email: $email
        Phone: $phone
        Message: $message
    ";
    $headers = "From: no-reply@yourdomain.com" . "\r\n" . "Reply-To: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your quote request has been sent successfully. Thank you!";
    } else {
        echo "Sorry, there was an error. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
