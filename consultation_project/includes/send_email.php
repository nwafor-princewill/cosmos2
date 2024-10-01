<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

// require '../vendor/autoload.php';

function sendEmail($name, $email, $phone, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nellyfancii@gmail.com'; // The owner's Gmail address
        $mail->Password   = 'dpeplcokrinsjfax'; // Use an app password, not the regular Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $mail->setFrom('nellyfancii@gmail.com', 'Fancii Consultations');
        $mail->addAddress('nellyfancii@gmail.com');  // Send to the owner's email
        $mail->addReplyTo($email, $name);  // Set reply-to as the client's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Consultation Request';
        $mail->Body    = "
            <h2>New Consultation Request</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


