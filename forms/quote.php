<?php
  // Replace with your actual receiving email address
  $receiving_email_address = 'contact@example.com'; // Your email address here

  // Check if the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set up email subject and body content
    $subject = 'Request for a Quote';
    $body = "
      Name: $name
      Email: $email
      Phone: $phone
      Message: $message
    ";
    
    // Set the "From" and "Reply-To" headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";  // Reply to the sender's email address
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email using PHP's mail function
    if (mail($receiving_email_address, $subject, $body, $headers)) {
      echo "Your quote request has been sent successfully. Thank you!";
    } else {
      echo "Sorry, there was an error. Please try again later.";
    }
  } else {
    echo "Invalid request.";
  }
?>
