<?php
// // ini_set("SMTP","smtp.gmail.com");
// // ini_set("sendmail_from","diyaexamination@gmail.com>");
// SmtpClient client = new SmtpClient("smtp.gmail.com");  
// client.EnableSsl = true;
$to_email = "amansin31@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: diyaexamination@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>