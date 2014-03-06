

<!--  Email HTML File -->
 <?php
// multiple recipients
$to  = 'romacknatividad@gmail.com';

// subject
$subject = 'Ferdinand Cusay';

// message
$message = "
<html>
<head>
  <title>Message</title>
</head>
<body>
  <h3>Nagawa ko na po</h3>
  <img src = 'http://upload.wikimedia.org/wikipedia/commons/e/e1/Atari_XE_joystick.jpg'>

</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To: Sir Romack <romacknatividad@gmail.com>\r\n";
$headers .= 'From: Ferdinand <cferdzz11@gmail.com>' . "\r\n";

// Mail it
$retval = mail($to, $subject, $message, $headers);
if($retval === true){
  echo "Message sent.";
}else{
  echo "Failed to sent";
}
?>