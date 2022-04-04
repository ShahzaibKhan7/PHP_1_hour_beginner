<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "phptut";

//   Creating database connection
  $conn = mysqli_connect($servername, $username, $password, $database);

//   Check connection
  if (!$conn) {
      die("Failed to connect". mysql_connect_error());
  }
  else {
      echo "Connection successful";
  }

  $sql = "INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('3', 'Huzaifa', '32', '3900')";

  if(mysqli_query($conn, $sql))
    {
      echo "Success";
    }
    else {
      echo "error". mysqli_error($conn);
    }

    mysqli_close($conn);

?>