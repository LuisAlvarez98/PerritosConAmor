<?php
session_start();
session_destroy();
 ?>
<html>
<head>
  <title>Perritos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://use.fontawesome.com/976e5e17b3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>
  <body>
    <!--navbar -->
    <nav class="z-depth-0 white">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
      <?php
      if(isset($_SESSION['email'])):  ?>
      <li><a class="modal-trigger white-text" href="logout.php">Logout</a></li>
    <?php else: ?>
      <li><a class="modal-trigger white-text" href="#login">Login</a></li>
    <?php endif; ?>
        <li><a class="modal-trigger  white-text" href="#register">Register</a></li>
        <li><a class="white-text"  id="button-projects">About us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a id="button-personal">Login</a></li>
        <li><a id="button-academic">Register</a></li>
        <li><a id="button-projects">About us</a></li>
      </ul>
    </div>
  </nav>
    <!--/-->
    <!--Parallax-->
    <div class="parallax-container">
       <div class="parallax"><img src="img/bg.jpg"></div>
       <div class="row">
         <form action="index.php" method="post">
           <div class="row  center-input">
             <div class="input-field col s12">
               <div class="col s6">
                 <input placeholder="Zipcode" name="zip-code" id="zip-code" type="text" class="validate browser-default">
               </div>

             <div class="col s6">
               <button id ="search-btn" class="btn modal-btn waves-effect waves-light" type="submit" name="action">Submit</button>
             </div>
           </div>
           </div>
         </form>
      </div>
   </div>
   <div class="row dogs">
     <script>
     var delay = 0;
     $( "#search-btn" ).click(function() {
       $( ".block" ).each(function(index) {
         $(this).delay(delay).fadeIn("slow");
          delay += 400;
       });
     });

     </script>
     <?php
     error_reporting(0);
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


     $sql = "SELECT name, zipcode, pp FROM pets";
     $result = $con->query($sql);
     if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             if($_POST['zip-code'] == $row["zipcode"]){
               echo '
               <div class="col s3">
               <div style="background-image:url('.$row['pp'].')"class="block z-depth-3">
               <div class="overlay">
                  <div class="text">'.$row['name'].'</div>
                  <i class="fa fa-heart-o text heart" aria-hidden="true"></i>
               </div>

               </div>
               </div>';
             }
         }
     } else {
         echo "0 results";
     }

     $con->close();
     ?>

   </div>


  </body>
</html>


  <!-- Modal Trigger -->


  <!-- Modal Structure -->
  <div id="login" class="modal">
    <div class="modal-content">
      <h4>Login</h4>
      <form action="login.php" method="post">
        <div class="row">

          <div class="input-field col s12">
            <input name="email" id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>

          <div class="col s12">
            <button class="btn modal-btn waves-effect waves-light" type="submit" name="action">Submit</button>
          </div>
        </div>
      </form>
    </div>
</div>
  <div id="register" class="modal">
    <div class="modal-content">
      <h4>Register</h4>

      <form action="register.php" method="post">
        <div class="row">

          <div class="input-field col s12">
            <input name="name" id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
          <div class="input-field col s12">
            <input name="email" id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <div class="col s12">
            <button id ="colaborator"class="btn modal-btn waves-effect waves-light" type="submit" name="action">Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
