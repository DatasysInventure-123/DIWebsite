<?php 
include 'header.php';
$page='contact';


if(isset($_POST['contactbtn']))
{
	
	
	require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'raasoftmailservice@gmail.com';                 // SMTP username
$mail->Password = 'Mypassword@123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;      

                              // TCP port to connect to




$mail->setFrom('raasoftmailservice@gmail.com', 'Official Mail');
$mail->addAddress('nuha.ajju@gmail.com', 'Tibr Leading Enterprises');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($email, $name);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$name=$_POST['name'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$industry=$_POST['industry'];
$enquiry=$_POST['enquiry'];
$subject=$_POST['subject'];

$message=$_POST['message'];



$mail->Subject = 'Mail From DI official Website ';
$mail->Body    = '<center style="background:#F0F8FF; padding:50px; "><table >
<tr><th>Name</th><td>'.$name.'</td></tr>
<tr><th>Industry</th><td>'.$industry.'</td></tr>
<tr><th>Enquiry</th><td>'.$enquiry.'</td></tr>

<tr><th>Email</th><td>'.$email.'</td></tr>
<tr><th>Phone</th><td>'.$phone.'</td></tr>
<tr><th>Subject</th><td>'.$subject.'</td></tr>




</table>
<h3>Message</h3>
<p>'.$message.'</p></center>
';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
  echo '<script language="javascript">';
echo 'alert("Message not sent, please try again.")';
echo '</script>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script language="javascript">';
echo 'alert("Message successfully sent")';
echo '</script>';
}
	
	
}

?>

        <section class="wrap-map">
        <div id="mapCanvas"></div>
    </section>
    <section class="wrap-contact-info">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wrap-contact-form">
                <h4>Send us an Email</h4>
                <form id="contactusform" action="javascript:void(0)" method="post">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" required/></div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Your E-mail" name="email" required/></div>
                    </div>
                      <div class="row form-group">
                      <div class="col-md-6">
                            <select class="form-control" required name="industry">
                                <option>-Choose your Industry-</option>
                                <option>Banking &amp; Finance Services</option><option>Energy &amp; Utility</option><option>Health Care</option>
                                 <option>Retail &amp; Consumer Goods</option><option>Communications &amp; Media</option><option>Non Profit Organization</option>
                                  <option>Travel &amp; Hospitality</option><option>Education</option><option>Logistics & Supply Chain</option>
                                 <option>Real Estate &amp; Development</option><option>Equipment Rental</option><option>IT Services</option>
                                <option>Professional Services </option>
                            </select></div>
                            <div class="col-md-6">
                            <select class="form-control" name="enquiry"><option>--Enquiry Type--</option><option>Products</option><option>Custom Software</option><option>Web Application</option>

                                <option>General Enquiry</option>
                            </select></div>
                          </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="phone" class="form-control" placeholder="Your Phone" name="phone" required/></div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" required/></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="Text comment" name="message"></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" id="contact-us-button" value="Submit" name="contactbtn"/></div>
                    </div>
                    <!--<div id="success"></div>-->
                </form>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12 wrap-contact-info-text ">
                 
                <h4>Get in Touch With Us</h4>
                <p>Our doors, ears and break room are always open (or at least Monday-Saturday, from 9am-5:30pm). </p>
                <h5>Corporate Office:</h5>
                <div class="row ">
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-user"></i>Address:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">6th Floor, Essel Towers, Bunts Hostel Circle<br />Mangaluru, 575003</p>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-calendar"></i>Phone:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">+91 824 425 1467</p>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-bar-chart"></i>E-mail:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">info@datasysinventure.com</p>
                        </div>
                    </div>
                </div>
          <br/>
                     <h5>Kerala Office:</h5>
                <div class="row ">
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-user"></i>Address:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">BCC Building, 1st Floor Kunjathur<br />Manjeshwar , Kasaragod, 671323</p>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-calendar"></i>Phone:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">+91 4998 278745</p>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix">
                        <div class="type-info pull-left"><i class="fa fa-bar-chart"></i>E-mail:</div>
                        <div class="info pull-right text-right">
                            <p class="no-margin">hr@datasysinventure.com</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

		
     <?php include 'footer.php' ?>

<script src="assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollTo.min.js" type="text/javascript"></script>

<script src="assets/js/modernizr.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="assets/js/wow.min.js" type="text/javascript"></script>
<script type="text/javascript">
new WOW().init();
    (function ($) {
    })(jQuery);</script>

<script type='text/javascript' src='https://maps-api-ssl.google.com/maps/api/js?v=3.3&sensor=false'></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>

 

<a href="#" class="striped-icon divider" id="top1"><i class="fa fa-chevron-up"></i></a>
</body>
    
</html>