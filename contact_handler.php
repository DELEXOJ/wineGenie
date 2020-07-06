<?php
$result="";
if (isset($_POST['submit'])) {
  // code...
  require'PHPMailer/PHPMailerAutoload.php ';
  $mail=new PHPMailer();
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='winegenie@winegenie.ca';
  $mail->Password='wi2ne?genie4';

  $mail->setFrom($_POST['email'],$_POST['name']);
  $mail->addAddress('winegenie@winegenie.ca');
  $mail->addReplyTo($_POST['email'],$_POST['name']);

  $mail->isHTML(true);
  $mail->Subject='Contact Us';
  $mail->Body='<h1 align=center>Name :' .$_POST['name'].'Message :'.$_POST['message'].'</h1>';

  if (!$mail->send()) {
    // code...
    $result="Some went wrong, Try again Later.\n Thank you";
  }
  else {
    // code...
    $result="Thanks for your feedback, We will get back to you soon.";
  }
}
 ?>
