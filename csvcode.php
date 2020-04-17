<?php 

 	if(isset($_POST['submit'])){



	$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$content=$_POST['comments'];
// $dataRow = [
//     'first_name' => $name,
//     'email' => $email,
//     'phone' => $phone,
//     'city' => $city,
//     'comments' => $comments,
// ];
// // You need to decide where you want the CSV file stored and since you are receiving lots of them you might want to use a timestamp in the filename. If you want the CSV file as part of the email you will need to attach it to the mail() message.
// $csvFile = 'csvfile/new.csv';
// $fp = fopen($csvFile, 'w');
// fputcsv($fp, $dataRow);
// fclose($fp);

// 

		$file_open = fopen("my.csv", "a");
  $no_rows = count(file("my.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'phone' => $phone,
   'city' => $city,
   'content' => $content
  );
  fputcsv($file_open, $form_data);


}









 ?>