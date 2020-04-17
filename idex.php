<?php 
	
	require 'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer();


	$mail->isSMTP();

	$mail->Host='smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='anuragsingh9999999@gmail.com';
	$mail->Password='asking+*1';

	$mail->setFrom('anuragsingh9999999@gmail.com','anurag');
	$mail->addAddress('pratapravi037@gmail.com');

	$mail->addReplyTo('anuragsingh9999999@gmail.com');

	$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'       => FALSE,
            'verify_peer_name'  => FALSE,
            'allow_self_signed' => TRUE
        )
    );

	$mail->isHTML(true);
	$mail->Subject='pjsbfdh ';
	$mail->Body='<h1 align=center>Shjvvhvh</h1><br><h4 align=center>gjjhjh</h4>';
	if(!$mail->send()){
		echo"message could not be senttt";
	}
	else{
		echo"msg has been sent";
	}
	





 ?>