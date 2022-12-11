<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Load Composer's autoloader
//require 'vendor/autoload.php';
if(isset($_POST['btn_submit'])){


  

  $firstName = trim($_POST["firstName"]);
  $lastName = trim($_POST["lastName"]);
  $companyName = trim($_POST["companyName"]);
  $emailAddress = trim($_POST["emailAddress"]);
  $subject = trim($_POST["subject"]);
  $message = $_POST["message"];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        //$mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'example@gmail.com';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($emailAddress, 'An-Nur Info');
        $mail->addAddress('iexample.com', $firstName." ".$lastName);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('CC@gmail.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<p> '.$message.'</p>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            $_SESSION['msg'] = true;
        }
        //echo 'Message has been sent';
    } catch (Exception $e) {
        $_SESSION['msg'] = false;
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}
?>