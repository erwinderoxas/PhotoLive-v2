<?php 
use Illuminate\Support\Facades\User;
use phpmailer\phpmailer\PHPMailerAutoload;
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'PhotoLiveV2@gmail.com';                 // SMTP username
$mail->Password = 'password159';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('sss@gmail.com', 'PhotoLiveV2');
$mail->addAddress($status, $status);     // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
*/
if($type == "regular"){
	$mail->addAttachment('merge/'.$image);
}else{
	$mail->addAttachment('gif/'.$image);
}
         // Add attachments
//$mail->addAttachment('lord.png', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'PhotoLiveV2';
$mail->Body    = '<b>Thank you for using PhotoLiveV2!</b>';
$mail->AltBody = '';
$validation = 0;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	if($type == "regular"){
		echo "<script>window.location.href = 'end/$image';</script>";
	}else{
		echo "<script>window.location.href = 'end/$image';</script>";
	}
}

?>
