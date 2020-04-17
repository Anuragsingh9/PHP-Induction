<?php 
  include 'db.php';

if (isset($_GET['sid'])) {
  $id = $_GET['sid'];
  
  $delete="DELETE FROM `table2` WHERE `id`=$id";
  $sql=mysqli_query($conn,$delete);
  if($sql){
    echo"Data delted";
    header('location: show.php');

  }else{
    echo"Not Delted";
  }
  
}
?>


<!-- 
value="
      <?php 
      // echo $_POST['name']??''; 
      ?>" -->