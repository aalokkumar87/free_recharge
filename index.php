<?php

 $name = $_POST['name']
 $f.name = $_POST['f.name']
 $phone = $_POST['phone']


  $email_from = 'shubhash8472@gmail.com'
  $email_subject = "New Form"
  $email_body = "user Name: $name.\n".n
                 "uer phone: $phone.\n"
                 "user f.name: $f.name.\n"
   $to = "aalokkumar2902@gmail.com"
   $headers = "from $email_from \r\n";
   mail($to, $email_subject, $email_body, $headers);
   header("Location: index.html");
?> 