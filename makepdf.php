<?php
	require_once __DIR__ .'/vendor/autoload.php';

	$name=$_POST['name'];
	$email=$_POST['email'];

	$mpdf = new \Mpdf\Mpdf();

	$data="";

	$data .='<h1> Details </h1>';

	$data .= '<strong> First Name </strong>' . $name . '<br/>';

	$data .= '<strong>  Email </strong>' . $email . '<br/>';

	if($pdf){
		$data .='<br><strong> Message</strong><br>'.$pdf;
	}

	$mpdf->WriteHTML($data);

	$mpdf->Output('myfile.pdf','D');
?>