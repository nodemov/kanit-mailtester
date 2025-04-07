<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $_ENV['MAIL_PORT'];

    // Recipients
    $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
    $to = 'kanit.wjpy@gmail.com';
    $mail->addAddress($to, 'Recipient Name');

    $body = 'Hello, from this is body text';

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Mailjet';

    // Load and process the template
    ob_start();
    include __DIR__ . '/template/email_template.php';
    $mail->Body = ob_get_clean();

    // Set plain text version
    $mail->AltBody = 'We have received your booking request. We will contact you soon.';

    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
