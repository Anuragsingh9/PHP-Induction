<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","my_user","my_password","crud");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM table2";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM table2 LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        //while($row = mysqli_fetch_array($res_data)){
            //here goes the data
                ?>
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
        
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_array($res_data)){
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Password'];?></td>
        <td><?php echo $row['City'];?></td>
        <td><?php echo $row['Gender'];?></td>
        <td><?php echo $row['Date'];?></td>
       
      </tr>
      <?php } ?>
      <tr>
          <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
      </tr>
    </tbody>
  </table>
  
</div>

    
</body>
</html>