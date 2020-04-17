<?php
  include "newdb.php";

  
if (isset($_POST["submit"])) {
    // Get Image Dimension
    $filename=$_FILES['img']['name'];
    $fileinfo = @getimagesize($_FILES["img"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["img"]["tmp_name"]))  {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    } 
   else if (file_exists('image/'.$filename)) {
      $response = array(
            "type" => "error",
            "message" => "Image already exist. Please select another image."
        );

    }
     





       // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        //echo $result;
    }    // Validate image file size
    else if (($_FILES["img"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {

    //basename($_FILES["img"]["name"].'_'.time(); for unique id name of photo

        $target = "image/" .'_'.time(). basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } 

        else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    
    .error{
      color:red;
    }

  </style>

</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="img">Image:</label>
      <input type="file" class="form-control" id="img" placeholder="Enter password" name="img">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Upload</button>
  </form>
  <div class="error">
  <?php if(!empty($response)){ ?>
<div class="response <?php echo $response['type']; ?>">
    <?php echo $response["message"]; ?>
</div>
</div>
<?php } ?>
  <?php

  if(isset($_POST['submit'])){
    if(isset($target)){

    $image_temp=$_FILES['img']['tmp_name'];
    

    move_uploaded_file($image_temp,"image/".$filename);

    $insert="INSERT INTO `imgtable` (`image`,`path`) VALUES('".$filename."','".$image_temp."')";

    $run=mysqli_query($conn,$insert);
    if($run){
    echo"img uploaded";
  }else{
  echo"img not uploaded";
}

}
}







  ?>









</body>
</html>
