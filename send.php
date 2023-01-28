<?php

use PHPMailer\PHPMailer\PHPMailer;

session_start();
if (!isset($_SESSION['lock'])) {
    $_SESSION['lock'] = 1;
    if (isset($_POST['message'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        try {
            $message = "<center><h3><u><b>Name:</b></u></h3><h2>$name</h2><br><h3><u><b>Phone:</b></u></h3><h2>$phone</h2><br>
        <h3><u><b>Email:</b></u></h3><h2>$email</h2><br><h3><u><b>Message:</b></u></h3><h2>$message</h2><br></center>";
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtpout.secureserver.net";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = "support@immunityspot.com"; //enter you email address
            $mail->Password = 'ISport@123'; //enter you email password
            $mail->Port = 465;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('support@immunityspot.com', 'Immunityspot.com');

            //Recipients
            $mail->addAddress('support@immunityspot.com');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'New User..';
            $mail->Body = $message;

            if ($mail->send())
                $_SESSION['success'] = "We will contact you soon..!";

            $_SESSION['email'] = $email;
            header('location: contact.php');
            exit();
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
            header('location: contact.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Fill up form first';
    }
}
header('location: contact.php');
