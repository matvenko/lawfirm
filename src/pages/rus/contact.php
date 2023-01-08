<?php
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('mailer/src/Exception.php');
require_once('mailer/src/PHPMailer.php');
require_once('mailer/src/SMTP.php');

if (isset($_POST['submit']) && $_POST['submit'] != ''):

	$subject = $_POST['subject'];
	$from = $_POST['mail'];
	$text = '<font color="#019F00"><strong>'.$_POST['mail'].'</strong></font> - '.$_POST['text'];
	

	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->SMTPDebug = false;
	$mail->Host = 'smtp.gmail.com';
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 587;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = 'archil.mchedlidze@lawpractice.ge';
	//Password to use for SMTP authentication
	$mail->Password = 'Marine.2109';
	//Set who the message is to be sent from
	$mail->setFrom($_POST['mail'], $subject);
	//Set an alternative reply-to address
	$mail->addReplyTo($_POST['mail']);
	//Set who the message is to be sent to
	$mail->addAddress('archil@lawfirm.ge', 'Archil');
	//Set the subject line
	$mail->Subject = $subject;
	$mail->Body    = $text;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// -------------------- $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	// ---------------- $mail->addAttachment('images/phpmailer_mini.png');
	//send the message, check for errors
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<h3 align="center">Message sent!</h3>';
	}


//	$headers1  = "MIME-Version: 1.0\r\n";
//	$headers1 .= "Content-type: text/html; charset=UTF-8\r\n";
//	$headers1 .= "From: " . $_REQUEST['mail'] . "\r\n";
//	$headers1 .= "Reply-To: " . $_REQUEST['mail'] . "\r\n";
//	$message   = $_REQUEST['text'];
//	$subject1  = $_REQUEST['subject'];
//	$user = "mate.zakariadze@gmail.com";
//	//print $message;
//	mail("mate.zakariadze@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3"); 
//	if (mail($user, $subject1, $message, $headers1)) { 
//    echo '<p align="center" style="margin:20px auto; color: #11af11; font-size: 24px;">messege acepted for delivery!</p>'; 
//} else { 
//    echo "some error happen"; 
//} 
//	//mail("archil@lawfirm.ge", "subject", "message");
endif;
?>



<div class="contact">

    <div class="container white_container custom_Section" style="margin-bottom: 0">
        <div class="white_qudi" style="height: 45px;"></div>
        <div class="col-md-4">
            <h3> Связаться с нами</h3>
            <img src="images/lawfirm-visitcard.png" alt="Register Your Business" class="img-responsive aside-image">
        </div>
        <div class="col-md-8 re-rgt pa-re">

            <h2 class="sub-h2" style="margin: 15px 0 27px 0;"> Адрес офиса:</h2>

            <address style="color: #404040">
                Грузия, Тбилиси 0102, ул. Марджанишвили №5<br>
                тел:	+ (995) 322 999 007<br>
                факс: 	+ (995) 322 957 708<br>
                моб:	+ (995) 599 999 007<br>
                Эл-почта: <a href="mailto:info@lawfirm.ge" style=" text-transform:none; margin:0; color:#f06418"> info@lawfirm.ge</a>
            </address>

        </div>
    </div>

    <div class="container white_container">
        <div class="col-md-12 ">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2106.1757834545488!2d44.79369518845605!3d41.70795084491731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd846695f89%3A0xec04a0b10d6ca64!2zNSDhg5nhg53hg6Lhg5Qg4YOb4YOQ4YOg4YOv4YOQ4YOc4YOY4YOo4YOV4YOY4YOa4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1670532039909!5m2!1ska!2sge"></iframe>
            </div>

        </div>
    </div>


</div>
<div class="clearer_30"></div>