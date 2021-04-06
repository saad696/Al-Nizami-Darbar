<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/Exception.php";
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";

$mail = new PHPMailer(true);
$alert = "";

if (isset($_POST['send'])) {
    $userName = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "fearofgod696@gmail.com";
        $mail->Password = "sksaad@911#";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom("fearofgod696@gmail.com");
        $mail->addAddress("fearofgod696@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Message recived (contact page)";
        $mail->Body = "<h3>Name: $userName<br> Email: $email<br> Message: $msg</h3>";
        $mail->send();
        $alert = '<div class="alert-success has-text-centered py-3">
    <span>Message sent</span>
    </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert-error has-text-centered py-3">
<span>'.$e->getMessage().'</span>
</div>';
    }
}
