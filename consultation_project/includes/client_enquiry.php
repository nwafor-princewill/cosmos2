<?php
// Ensure there's no whitespace before this PHP opening tag

// Prevent direct access to this file
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /cosmos2/contact.php");
    exit();
}

require_once 'dbh.inc.php';
require_once 'send_email.php';

// Initialize an array to store errors
$errors = [];

// Retrieve and sanitize form data
$fullName = trim(filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$phoneNo = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '';
$location = trim(filter_input(INPUT_POST, 'location', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$hearAboutUs = trim(filter_input(INPUT_POST, 'hear', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$service = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');

// Validate form data
if (empty($fullName)) {
    $errors[] = "Full name is required.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required.";
}

if (empty($phoneNo)) {
    $errors[] = "Phone number is required.";
}

// If there are no errors, proceed with saving data and sending email
if (empty($errors)) {
    // Save to database using MySQL
    $sql = "INSERT INTO client_enquiries (full_name, phone_no, email, location, hear_about_us, service, message) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $fullName, $phoneNo, $email, $location, $hearAboutUs, $service, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        // Send email notification to the same email address
        $emailResult = sendEmail(
            $fullName, // Full name as the sender
            $email,    // Client's email address (reply-to)
            $phoneNo,  // Client's phone number
            "Location: $location<br>Service: $service<br>Heard About Us: $hearAboutUs<br>Message: $message"
        );

        if ($emailResult !== true) {
            $errors[] = "Error sending notification email. Please try again.";
        }
    } else {
        $errors[] = "Error saving data. Please try again.";
    }

    mysqli_stmt_close($stmt);
}

// Handle the result
if (empty($errors)) {
    // If everything was successful, redirect to the thank you page
    header("Location: ../../contact.php?status=success");
    exit();
} else {
    // If there were errors, redirect back to the form with error messages
    $errorString = implode("|", $errors);
    header("Location: ../../contact.php?errors=" . urlencode($errorString));
    exit();
}