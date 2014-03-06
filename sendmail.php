<!-- Email Simple Text File -->
<?php 
    //change this to your email. 
    $to = "cferdzz11@gmail.com"; 
    $from = "cferdzz11@gmail.com"; 
    $subject = "Simple text file email"; 

    //begin of HTML message 
    $message = 'This is a message.';
   //end of message 
    $headers  = "From: ".$from."\n";  

    // now lets send the email. 
    $retval = mail($to, $subject, $message, $headers); 

   if($retval === true){
     echo "Message has been sent.";
   } else{
     echo "Failed to send message.";
   }
?>
