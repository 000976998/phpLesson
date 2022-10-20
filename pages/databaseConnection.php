<html>
<head>
</head>
<body>
  <?php
    $conn = mysqli_connect("localhost:3307", "root", "");

    //check the mysqli connection
    if(mysqli_connect_errno()){
      echo "<p>Failed Conntection to the MYSQL".mysqli_connect_error()."<p>";
    }
    else{
      echo "<p>Connection Successful.</p>";

      //check the database connection
      if(!mysqli_select_db($conn, "udemy")){
        echo "<p>Failed to select udemy db.</p>";
      }
      else {
        echo "<p>select Udemmy db successfull.</p>";
      }
    }
  ?>
</body>
</html>