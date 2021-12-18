<?php 
	include 'PHPMailerAutoload.php';

	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Post=587;
	$mail->SMTPSecure="tls";
	$mail->Username="vanisharma55532@gmail.com";
	$mail->Password="vani@123";
	$mail->SMTPAuth=true;
	$mail->setFrom("purushottam1619@gmail.com");
	$mail->addAddress("purushottam1619@gmail.com");
	$mail->isHTML(true);
	$mail->Subject="Testing mail";
	$mail->Body="Hello message arrived";
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false));

	if($mail->send())
	{
		echo "email sent successfully";
	}
	else
	{
		echo "failed to send email";
	}
 ?>