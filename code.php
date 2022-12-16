<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Load Composer's autoloader
//require 'vendor/autoload.php';
if(isset($_POST['btn_submit'])){

  $_SESSION['msg'] = false;

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
        $mail->Username   = '';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('', 'Info@An-Nur');
        $mail->addAddress('');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($emailAddress, $subject);
        //$mail->addCC('CC@gmail.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<p> Mail from: '.$firstName." ".$lastName.' [ '.$emailAddress.' ]</p><br><br>
                          <p>.'.$message.'</p>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $_SESSION['msg'] = true;
        $_SESSION['msg_title'] = "Sent";
        $_SESSION['msg_info'] = "Form sent";
        $_SESSION['msg_icon'] = "success";
        //header('Location: index.php');
        /* if($mail->send()){
            $_SESSION['msg'] = true;
            header('Location: index.php');
        } */
        //echo 'Message has been sent';
    } catch (Exception $e) {
        $_SESSION['msg'] = true;
        $_SESSION['msg_title'] = "Failed";
        $_SESSION['msg_info'] = "Error occurred ".$mail->ErrorInfo;
        $_SESSION['msg_icon'] = "error";
        //header('Location: index.php');        
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}
?>