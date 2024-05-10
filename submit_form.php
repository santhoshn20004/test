<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sandy7708234949@gmail.com.com"; // Change this to your email address
    $subject = "New Eco Bags Order"; // Email subject

    // Collect form data
    $name = $_POST["name"];
    $company_name = $_POST["company_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $num_pieces = $_POST["num_pieces"];
    $details = $_POST["details"];
    $printing = $_POST["status"] == "Yes" ? "Yes" : "No";

    // Email content
    $message = "Name: $name\n";
    $message .= "Company Name: $company_name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Address: $address\n";
    $message .= "Number of Pieces: $num_pieces\n";
    $message .= "Other Details: $details\n";
    $message .= "Printing Required: $printing\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Your order has been submitted successfully.";
    } else {
        echo "Sorry, there was a problem submitting your order.";
    }
}
?>
