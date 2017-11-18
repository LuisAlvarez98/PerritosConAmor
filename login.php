<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "perritos";


$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

  $name = $_POST['email'];
  $email = $_POST['password'];


    $sql = "SELECT FROM perritos (email, password)";

     if ($con->query($sql) === TRUE) {
         echo "New record created successfully";
         header("Location: index.php");
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }

  }

$con->close();
?>
