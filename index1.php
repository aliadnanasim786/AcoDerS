<?php

    $result = "";

if (isset($_POST['submit'])) {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
   
   
    $mail->Host='smtp.gmail.com';
    $mail->Port='587';
    $mail->SMTPAuth='true';
    $mail->SMTPSecure='tls';
    $mail->Username='abdurrehman7866786@gmail.com';
    $mail->Password='abdur78666';

    $mail->setfrom($_POST['email'],$_POST['name']);
    $mail->addAddress('abdurrehman7866786@gmail.com');
    $mail->AddReplyto($_POST['email'],$_POST['name']);


    $mail->isHTML(true);
    $mail->Subject= 'Form Submission: '.$_POST['subject'];
    $mail->Body= '<h1 align=center>Name : '.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>Subject:'.$_POST['subject'].'<br    
    >Message: '.$_POST['message'].'</h1>';
 

    if(!$mail->send()) {
    # code...
    $result="Something Went Wrong . pleaase try again later...";

}
        else {
            $result="Thanks For Contacting Us We Will Response soon..!";
        }
}
  include 'index.html';
?>