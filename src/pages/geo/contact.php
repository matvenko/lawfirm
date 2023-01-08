<?php
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('mailer/src/Exception.php');
require_once('mailer/src/PHPMailer.php');
require_once('mailer/src/SMTP.php');

if (isset($_POST['submit'])):
	$subject = $_POST['subject'];
	$from = $_POST['mail'];
	$text = '<font color="#019F00"><strong>'.$_POST['mail'].'</strong></font> - '.$_POST['text'];
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->SMTPDebug = false;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = 'archil.mchedlidze@lawpractice.ge';
	$mail->Password = 'Marine.2109';
	$mail->setFrom($_POST['mail'], $subject);
	$mail->addReplyTo($_POST['mail']);
	$mail->addAddress('mate.zakariadze@gmail.com', 'mate');
	$mail->Subject = $subject;
	$mail->Body    = $text;
	$mail->AltBody = 'This is a plain-text message body';
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<h3 align="center">Message sent!</h3>';
	}

endif;


?>
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h3>კონტაქტი</h3>
			</div>	
			<div class="col-md-6 contact-lft">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.657942284974!2d44.79268583947099!3d41.708497175487224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd816282415%3A0x68cb191279363b49!2s6+Kote+Marjanishvili+St%2C+Tbilisi!5e0!3m2!1sen!2sge!4v1501153134356"></iframe>

			 </div>
			<h4>ოფისის მისამართი:</h4>
				<address>
                    საქართველო, თბილისი 0102, მარჯანიშვილის ქუჩა №6 (მწვანე შენობა)<br>
                    ტელ:	+ (995) 322 999 007<br>
                    ფაქსი:	+ (995) 322 957 708<br>
                    მობ:		+ (995) 599 999 007<br>
                    ელ-ფოსტა: <a href="mailto:info@lawpractice.ge" style=" text-transform:none; margin:0; color:#f06418"> info@lawpractice.ge</a>
                </address>
			</div>	
			 <div class="col-md-6 contact-bottom">
				 <form id='contactus'  method='post' name="myForm" accept-charset='UTF-8' onsubmit="return validateForm()">
					<input type="text" value="სახელი/გვარი" name="subject" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'სახელი/გვარი';}">	
					<input type="text" name="mail" value="ელ-ფოსტა" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ელ-ფოსტა';}">				
					<input type="text" name="text" value="ტელეფონი" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ტელეფონი';}">
					<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ტექსტი';}">ტექსტი</textarea>	
					<input type="submit" name="submit" value="გაგზავნა">
				</form>	
			</div>
				<div class="clearfix"></div>		
		</div>
	</div>
