<?php
// get data from form  

$name = $_POST['fName'];
$email= $_POST['email'];
$contact= $_POST['phone'];

$to = "realtyavenuesales@gmail.com";
$subject = "DLF MAILER";

// $txt ="Please find the mentioned details of a intersted user in DLF project  \r\n  Name = ". $name . "\r\n  Email = " . $email . "\r\n contact =" . $contact . "\r\n Typology =" . $typology . "\r\n Location =" . $location . "\r\n Budget =" . $budget;
$txt ="Please find the mentioned details of a intersted user in DLF project  \r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n contact =" . $contact;
$headers = "From: realtyavenuesales@gmail.com";

if($email!=NULL) {
      mail($to,$subject,$txt,$headers);
}
echo '<script language="javascript">';
echo 'window.location.href="index.html";';
echo 'alert("Your Message successfully sent, we will get back to you ASAP.");';
echo '</script>';
?>