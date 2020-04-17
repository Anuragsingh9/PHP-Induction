<?php
if(isset($_POST['upload_file']))
{
 $uploadfile=$_FILES["file"]["tmp_name"];
 
 $file_name=$_FILES["file"]["name"];
 move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);

 $zip = new ZipArchive(); // Load zip library 
 $zip_name ="upload.zip"; // Zip name
 if($zip->open($zip_name, ZipArchive::CREATE) ==TRUE)
 { 
  $zip->addFile($file_name);
 $zip->close();


  header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=upload.zip');
    header('Content-Length: ' . filesize($zip_name));
    readfile($zip_name);
 }
 
 echo "Sorry ZIP creation failed at this time";
}
?>