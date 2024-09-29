<?php
// Prevent direct access
if (!isset($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH) !== '/client_enquiry.php') {
    header("Location: contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h1>Thank You!</h1>
    <p>Your enquiry has been submitted successfully. We will get back to you soon.</p>
    <a href="index.php">Return to Home</a>
</body>
</html>