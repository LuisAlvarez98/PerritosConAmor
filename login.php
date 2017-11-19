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
session_start();
if(!empty($_POST['email'] && !empty($_POST['password']))){
$result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	$_SESSION["email"] = $row['email'];
  $_SESSION["name"] = $row['name'];
   header("Location: index.php");
	} else {
	echo "no";
	}
}

$con->close();
?>
