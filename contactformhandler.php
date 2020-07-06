<?php
// $name=$_POST['name'];
// $vistor_email=$_POST['email'];
// $message=$_POST['messsage'];
//
// $email_from='ayobamiesther212@gmail.com';
// $email_subject="New Feedback Submission";
// $email_body="User Name: $name\n".
//             "User Email: $visitor_email.\n\n\n".
//             "User Message:\n $message.\n";
//
//
//             $to="ayobamiesther212@gmail.com";
//             $header="From: $email_from\r\n";
//             $header="Reply-To: $visitor_email\r\n";
//             mail($to,$email_subject,$email_body,$header);
//             header("Location: contact.html");

if (isset($_POST['submit'])) {
  // code...
  $name=$_POST['name'];
 $vistor_email=$_POST['email'];
 $message=$_POST['messsage'];

 $mailTo="winegenie@winegenie.ca";
 $header="From: $vistor_email\r\n";
 $txt="You have a new message from  ".$name.".\n\n\n".$message;
 mail($mailTo,$txt,$header);
            header("Location: contact.html?mailsent");
}
?>
