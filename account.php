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
        <li><a class="modal-trigger  white-text" href="account.php">Account</a></li>
        <?php else: ?>
          <li><a class="modal-trigger white-text" href="#login">Login</a></li>
          <li><a class="modal-trigger  white-text" href="#register">Register</a></li>
        <?php endif; ?>

        <li><a class="white-text"  id="button-projects">About us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a id="button-personal">Login</a></li>
        <li><a id="button-academic">Register</a></li>
        <li><a id="button-projects">About us</a></li>
      </ul>
    </div>
  </nav>
  <!--Content-->
  <div class="row">
    <div class="col s6">
      <div class="card small">
        hola: <?php echo $_SESSION['name']; ?>
      </div>
    </div>
    <div class="col s6">
      <div class="card small">
        hola: <?php echo $_SESSION['name']; ?>
        <?php echo $_SESSION['email']; ?>
      </div>
    </div>
    <div class="col s12">
      <div class="card small">
        hola: <?php echo $_SESSION['name']; ?>
      </div>
    </div>

  </div>

  </body>
</html>
