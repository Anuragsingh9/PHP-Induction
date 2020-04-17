<?php 

  if(isset($_POST['submit'])){



  $name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$content=$_POST['comments'];



   $file_open = fopen("csvfile/my.csv", "a");
  $no_rows = count(file("csvfile/my.csv"));
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


<!DOCTYPE html>
<html lang="en">
<head>
  <title>csv</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <div class="col-md-4">
  <form action="" method="post">

    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="number" class="form-control" id="pwd" placeholder="enter phone number" name="phone">
      
    </div>

    
    

    
    <div class="form-group">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter city name" name="city">
    </div>

    <div class="form-group">
      <label for="pwd">Content:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter your content" name="comments">
    </div>

    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
  </div>
</div>

</body>
</html>
