<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php' ;
    require 'PHPMailer/src/SMTP.php' ;

    
    
    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);
        $mail->isSMTP();    
        $mail->Host         =   "smtp.gmail.com";
        $mail->SMTPAuth     =   true;
        $mail->Username     =   "tt525054@gmail.com";
        $mail->Password     =   "fckdfuritbkmfbmg";
        $mail->SMTPSecure   =   PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port         =   465;
        $mail->setFrom('tt525054@gmail.com' , 'Mailer');
        $mail->addAddress("tt525054@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];
       
        $mail->send();
        echo '<script>alert("Message has been sent")</script>';
    }
    // else {
    //     echo "<script>alert('Message could not be sent') </script>";
    // }
?>