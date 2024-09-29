<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'dbh.inc.php';  // Your database connection file
require_once 'send_email.php';  // Include the email sending function

// Function to send JSON response
function sendJsonResponse($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

// Redirect to homepage if accessed directly with GET
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /index.php");
    exit();
}

$response = ["success" => false, "message" => "An error occurred."];

if (isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM newsletter WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 0) {
            // Email doesn't exist, insert it
            $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
            $stmt->bind_param("s", $email);
            
            if ($stmt->execute()) {
                // Send notification email to website owner
                $ownerEmail = 'nellyfancii@gmail.com';  // Owner's email
                $subject = "New Newsletter Subscription";
                $message = "A new user has subscribed to your newsletter: $email";
                
                if (sendEmail('Website Newsletter', 'no-reply@yourdomain.com', '', $message)) {
                    $response = ["success" => true, "message" => "Subscribed successfully!"];
                } else {
                    $response = ["success" => false, "message" => "Subscribed, but failed to notify the owner."];
                }
            } else {
                $response = ["success" => false, "message" => "Error occurred. Please try again."];
            }
        } else {
            $response = ["success" => false, "message" => "Email already subscribed."];
        }
        
        $stmt->close();
    } else {
        $response = ["success" => false, "message" => "Invalid email address."];
    }
} else {
    $response = ["success" => false, "message" => "No email provided."];
}

$conn->close();

// Send JSON response to AJAX request
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    sendJsonResponse($response);
} else {
    // Non-AJAX request fallback
    session_start();
    $_SESSION['newsletter_message'] = $response['message'];
    $current_page = isset($_POST['current_page']) ? $_POST['current_page'] : '/index.php';
    header("Location: " . $current_page);
    exit();
}
