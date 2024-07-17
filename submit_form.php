<?php
require 'vendor/autoload.php'; // Include PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the email field is set and not empty
  if (isset($_POST['email']) && !empty($_POST['email'])) {
    // Sanitize email input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Instantiate PHP Mailer
    $mail = new PHPMailer(true);

    try {
      //Server settings
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com'; // SMTP server
      $mail->SMTPAuth = true;
      $mail->Username = 'ed.eddie756@gmail.com'; // SMTP username
      $mail->Password = 'dzubdkcvuemfjkvj'; // SMTP password
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      //Recipients
      $mail->setFrom('registrar@must.ac.mw', 'MUST - ALUMNI');
      $mail->addAddress($email);

      // Content
      $mail->isHTML(true);
      $mail->Subject = 'Subscription Message';
      $mail->Body    = 'You have successfully subscribed to our newsletter. You\'ll be receiving college updates using this email.<br> Regars, ';
      $mail->AltBody = 'You have successfully subscribed to our newsletter.';

      $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } else {
    echo "Email field is empty";
  }
}
