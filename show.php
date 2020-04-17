<?php
  session_start();
    if(isset($_SESSION['name'])){
    include 'db.php';
    if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location:login.php');
  }
}else{
  header('location:login.php');
}

  
    $select="SELECT * FROM `table2`";
    $sql=mysqli_query($conn,$select);
    if($sql->num_rows>0){
  
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
</head>
<body>
<form method="POST">
  <input type="submit" name="logout" value="LOG OUT">

</form>
<div class="container">
  <h2>Basic Table</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>City</th>
        <th>Gender</th>
        <th>Date</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>
      <?php while($result=mysqli_fetch_assoc($sql)){
      ?>
      <tr>
        <td><?php echo $result['id'];?></td>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Email'];?></td>
        <td><?php echo $result['Password'];?></td>
        <td><?php echo $result['City'];?></td>
        <td><?php echo $result['Gender'];?></td>
        <td><?php echo $result['Date'];?></td>
        <td><button class="btn btn-warning"><a href="update.php?sid=<?php echo $result['id'];?>">Edit</a></button> <button class="btn btn-info"><a href="delete.php?sid=<?php echo $result['id'];?>">Delete</a></button> </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php
    }else
    {
      echo"no record found";
    }
  ?>
</div>

</body>
</html>
