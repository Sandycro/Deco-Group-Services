<?php
  $name = $_POST['name'];
  $subject  = $_POST['subject'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $enquiry = $_POST['enquiry'];

  $email_from = 'sandy.smircic@hotmail.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n".
                  "Subject: $subject.\n".
                   "User email: $email.\n".
                      "User Telephone: $telephone.\n".
                        "User Enquiry: $enquiry.\n";


  $to = "sandy.smircic@hotmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact.html");
?>
