<?php
     if(isset($_POST['Submit']))
     {
           $name = $_POST['name'];
           $email= $_POST['mailid'];
           $msg= $_POST['subject'];
           $to = "thaiveedutrust2018@gmail.com";
           $subject = "Mail from TVT website";
           $message ="name = ". $name . "\r\n  mailid = " . $email . "\r\n  subject =" . $msg;
           $headers = "From: ".$email;
           if(mail($to, $subject, $message, $headers))
          {
               echo "<h1>Sent Successful! Thank you</h1>";
          }
          else
         {
              echo "Something went wrong!";
          }
     }
?>