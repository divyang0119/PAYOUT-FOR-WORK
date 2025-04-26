<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

function send_otp($to, $subject, $content) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'divyangchaudhari1303@gmail.com';
        $mail->Password     = 'yyftzebuzqhvrpcr';
        $mail->SMTPSecure   = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port         =  465;
        
        $mail->setFrom('divyangchaudhari1303@gmail.com', 'OTP for login');
        $mail->addAddress($to, "verify Email");

        $mail->isHTML(true);
        $mail->Subject  = $subject;
        $mail->Body     = "<p style='color:green'>Your OTP for Login<b>$content</b></p>";
        $mail->send();  
        echo "OTP has been sent Successfully!";
    } catch(Exception $e) {
        echo "OTP Could not be sent mailer Error: {$mail->ErrorInfo}";
    }
}
?>