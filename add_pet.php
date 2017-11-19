
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

  $name_pet = $_POST['name_pet'];
  $zip = $_POST['zip-code'];
  $pp = $_POST['pp'];
  $sex = $_POST['sex'];
  $race = $_POST['race'];
  $owner = $_SESSION['name'];


  $sql = "INSERT INTO pets(name, zipcode, pp, sex, race)
   VALUES ('$name_pet', '$zip', '$pp','$sex', '$race')";

   if ($con->query($sql) === TRUE) {
       echo "New record created successfully";
       header("Location: index.php");
   } else {
       echo "Error: " . $sql . "<br>" . $con->error;
   }

  $_POST['name'] = '';
  $_POST['zipcode']= '';
  $_POST['pp'] = '';
  $_POST['sex'] = '';
  $_POST['race'] = '';


$con->close();
?>
