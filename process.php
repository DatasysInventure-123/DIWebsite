<?php
$to = "raziq@datasystechnology.com";
$subject = "Enquiry From Your Official Website";
$message = $_POST['message'];
$from = $_POST['email'];
$headers = "From:" . $from;
  $name = $_REQUEST['name'];
   $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $state = $_REQUEST['state'];
   $country = $_REQUEST['country'];
   $pin = $_REQUEST['pin'];
   $comments = $_REQUEST['comments'];
  $email_message = $_REQUEST['message'];

mail($to,$subject,$email_message,$headers);
echo '<script type="text/javascript">alert("Successfully Sent Message");</script>';
echo "<script>setTimeout(\"location.href = 'index.html';\",1000);</script>";
?>
