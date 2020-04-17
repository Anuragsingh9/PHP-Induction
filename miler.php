<?php
$result='';
if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "anuragsingh9999999@gmail.com";
$mail->Password   = "asking+*1";
$mail->IsHTML(true);
$mail->AddAddress("pratapravi037@gmail.com", "gourav varma");
$mail->SetFrom("anuragsingh9999999@gmail.com", "hemant");
//$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
$mail->MsgHTML($content);
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
}
/*$result='';
if(isset($_POST['submit'])){
	require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer; //obj create
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='h.jangir1998@gmail.com';
	$mail->Password='ur pass';// after change
	$mail->setFrom($_POST['email'],$_POST['name']);  // sender email
	$mail->addAddress('2016cshemant4830@poornima.edu.in','pu');
	// $mail->addReplyTo($_POST['email'],$_POST['name']);
	$mail->isHTML(true);
	$mail->subject='From submission: '.$_POST['subject'];
	$mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br> Email: '.$_POST['email'].'<br> Message: '.$_POST['msg'].'</h1>';
	$mail->addReplyTo($_POST['email'],$_POST['name']);
	print_r($mail);
	if(!$mail->send()){
		$result="something went wronng. please try again";
	}
	else{
		$result ="Thanks ".$_POST['name']."for contacting us.";
	}
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>php mailer class</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body class="bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"><?php echo $result; ?></h5>
        <form action="" method="post" id="form-box" class="p-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>