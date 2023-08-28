<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';    
    require 'PHPMailer/PHPMailer/vendor/autoload.php';
    $mail = new PHPMailer;

    if(isset($_POST['send-contact-mail']))
    {	    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];
        $body = 'Name:- '.$name.'<br>Email id:- '.$email.'<br>Phone:- '.$phone.'<br>Message:- '.$message;
    }
        
    try {
        //Server settings
        $mail->SMTPDebug = 1;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.indiakicompany.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'no-reply@gopibhaav.in';                     // SMTP username
        $mail->Password   = '0[y5Y)KWcH=0';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to//
    
        //Recipients
        $mail->setFrom('no-reply@gopibhaav.in', 'Gopi Bhaav');
        $mail->addAddress("info@gopibhaav.in", "Gopi Bhaav");     // Add a recipient
        $mail->addReplyTo($email, $name);
    
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();
        echo true;
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo false;
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 

?>