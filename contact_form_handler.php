<?php
  $name = $_GET['name'];
  $subject  = $_GET['subject'];
  $email = $_GET['email'];
  $telephone = $_GET['telephone'];
  $enquiry = $_GET['enquiry'];

  $email_to = 'sandy.smircic@hotmail.com';
  $subject = 'Message from a site visitor '.$name;

  $body_message = 'From: '.$name."\n";
  $body_message .= 'Subject: '.$subject."\n";
  $body_message .= 'E-mail: '.$email."\n";
  $body_message .= 'Telephone: '.$telephone."\n";
  $body_message .= 'Message: '.$enquiry;

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  $mail_status = mail($email_to, $subject, $body_message, $headers);

  if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
      alert('Thank you for the message. We will contact you shortly.');
      window.location = 'contact.html';
    </script>
  <?php
  }
  else { ?>
    <script language="javascript" type="text/javascript">
      alert('Message failed. Please, send an email to emailo@deco.co.uk');
      window.location = 'contact.html';
    </script>
  <?php
  }
  ?>
