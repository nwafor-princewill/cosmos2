<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Include database connection
    require_once 'dbh.inc.php';

    // Sanitize and validate input data
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /cosmos2/index.php?consultation=invalid_email");
        exit();
    }

    // Prepare SQL statement
    $sql = "INSERT INTO consultations (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        header("Location: /cosmos2/index.php?consultation=prepare_error");
        exit();
    }

    // Bind parameters and execute
    if (!$stmt->bind_param("ssss", $name, $email, $phone, $message)) {
        error_log("Binding parameters failed: " . $stmt->error);
        header("Location: /cosmos2/index.php?consultation=bind_error");
        exit();
    }

    if ($stmt->execute()) {
        //  email
        require_once 'send_email.php';
        $emailResult = sendEmail($name, $email, $phone, $message);
        
        if ($emailResult === true) {
            header("Location: /cosmos2/index.php?consultation=success");
        } else {
            error_log("Email Error: " . $emailResult);
            header("Location: /cosmos2/index.php?consultation=email_error" . urlencode($emailResult));
        }
    } else {
        error_log("Execute failed: " . $stmt->error . " SQL: " . $sql);
        header("Location: /cosmos2/index.php?consultation=db_error");
    }

    $stmt->close();
    $conn->close();
} else {
    // If the form wasn't submitted, redirect to the home page
    header("Location: /cosmos2/index.php");
}
exit();
