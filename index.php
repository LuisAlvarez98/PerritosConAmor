<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
     // last request was more than 30 minutes ago
     session_unset();     // unset $_SESSION variable for the run-time
     session_destroy();   // destroy session data in storage
}

 ?>
<html>
<head>
  <title>Perritos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
      <a href="index.php" class="brand-logo center">Perros Calientes</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i style="font-size:20px" class="fa fa-bars white-text"></i></a>
      <ul class="right hide-on-med-and-down">
      <?php
      if(isset($_SESSION['email'])):  ?>
      <li><a class="modal-trigger white-text" href="logout.php">Logout</a></li>
        <li><a class="modal-trigger  white-text" href="account.php">Account</a></li>
        <?php else: ?>
          <li><a class="modal-trigger white-text" href="#login">Login</a></li>
          <li><a class="modal-trigger  white-text" href="#register">Register</a></li>
        <?php endif; ?>

        <li><a class="white-text"  id="button-projects">About us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php
        if(isset($_SESSION['email'])):  ?>
        <li><a class="modal-trigger black-text" href="logout.php">Logout</a></li>
          <li><a class="modal-trigger  black-text" href="account.php">Account</a></li>
          <?php else: ?>
            <li><a class="modal-trigger black-text" href="#login">Login</a></li>
            <li><a class="modal-trigger  black-text" href="#register">Register</a></li>
          <?php endif; ?>

          <li><a class="white-text"  id="button-projects">About us</a></li>

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
               <button id ="search-btn" class="btn modal-btn waves-effect waves-light"  name="action" ><i class="fa fa-search" aria-hidden="true"></i></button>
             </div>
           </div>
           </div>
         </form>
      </div>
   </div>
   <div class="row dogs">
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

               <div class="col s12 m3">
               <div style="background-image:url('.$row['pp'].')"class="block z-depth-3 ds-non ">
               <div class="overlay">
                  <div class="col s12">
                  <div class="text">'.$row['name'].'</div>
                  </div>
                  <div class="col s12">
                  <a class ="action-heart">
                    <i class="fa fa-heart-o text heart"></i>
                  </a>
                  </div>
               </div>
               </div>
               </div>
               ';

             }
         }
     } else {

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
  <div id="account" class="modal">
    <div class="modal-content">
      <h4>Account</h4>

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
  <script>
  var delay = 0;
  var flag;
    $( ".block" ).each(function(index) {
      $(this).delay(delay).fadeIn("slow");
       delay += 400;
    });

  $(".action-heart").on("click", function(){
    $(".answer1").toggle(300);
    $(this).find($(".fa")).toggleClass('fa-heart-o').toggleClass('fa-heart');
      if($(".fa").hasClass("fa-heart")){
        $("#perro").modal('open');
      }else{
        $("#perro").modal('close');
      }
});
  </script>
  <div id="perro" class="modal">
  <div class="modal-content">
    <h4>More info</h4>
    <div class="row">
      <div class="col s12 m6"><h6 class="flow-text">Owner: <?php echo $_SESSION['name']; ?></h6></div>
      <div class="col s12 m6"><h6 class="flow-text">Contact: <a href="mailto:'.<?php echo $_SESSION['email']; ?>.'"><?php echo $_SESSION['email']; ?></a> </h6></div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
