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
        <a href="index.php" class="brand-logo center">Logo</a>
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
    <div class="col s4">
      <div class="card small center">
        <h5>Personal Information: </h5>
            <h4><?php echo $_SESSION['name']; ?></h4>
            <h5><?php echo $_SESSION['email']; ?></h5>
      </div>
    </div>
    <div class="col s4">
      <div class="card small center">
        <h5>Pet: </h5>
        <a class="btn-floating btn-large waves-effect waves-light red right margin-right-m modal-trigger" href="#add-pet"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="col s4">
      <div class="card small center">
          <h5>Likes:  </h5>
      </div>
    </div>

  </div>

  </body>
</html>

<div id="add-pet" class="modal">
  <div class="modal-content">
    <h4>Add pet</h4>
    <form action="add_pet.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input name="name_pet" id="name_pet" type="text" class="validate">
          <label for="name_pet">Name</label>
        </div>
        <div class="input-field col s12">
          <input name="zip-code" id="email" type="text" class="validate">
          <label for="zip-code">Zipcode</label>
        </div>

        <div class="input-field col s12">
          <input name="pp" id="pp" type="text" class="validate">
          <label for="pp">Photo</label>
        </div>

        <div class="input-field col s6">
          <input name="sex" id="sex" type="text" class="validate">
          <label for="sex">Sex</label>
        </div>
        <div class="input-field col s6">
            <input name="race" id="race" type="text" class="validate">
              <label for="race">Race</label>
          </div>


        <div class="col s12">
          <button class="btn modal-btn waves-effect waves-light" type="submit" name="action">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
