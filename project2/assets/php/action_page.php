<?php
  $visitor  = $_GET['visitor'];
  $destination_email = "jlb2886@rit.edu";
  $email_subject = "(2109) iSchool Madrid, MI-Your last name, firtname  Baker, Julianna";
  $email_body = "Visitor name  $visitor\n";
  mail($destination_email, $email_subject, $email_body);
  echo "Data Sent on Sunday Sep. 29th";
?>