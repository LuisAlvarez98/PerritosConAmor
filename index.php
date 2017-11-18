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

  </head>
  <body>
    <!--navbar -->
    <nav class="z-depth-0 white">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="black-text modal-trigger" href="#modal1">Login</a></li>
        <li><a class="black-text"  id="button-academic">Register</a></li>
        <li><a class="black-text"  id="button-projects">About us</a></li>
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

   <form class="col s12">
     <div class="row center-input">
           <div class="input-field col s12">
             <div class= "col s6">
               <input id="icon_prefix" type="text" class="validate  browser-default">
             </div>
              <div class= "col s6">
                <a class="waves-effect waves-light btn search-btn btn-small margin-left-s" id="search-btn">Search</a>
              </div>
            </div>
          </div>
      </form>
      </div>
   </div>
   <div class="row">
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
     <div class="col s3">
       <div class="block ds-non"></div>
     </div>
   </div>



  </body>
</html>

  <!-- Modal Trigger -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Login</h4>

      <form action="login.php" method="post">
        <div class="row">

          <div class="input-field col s12">
            <input name="name" id="name" type="text" class="validate">
            <label for="name">Email</label>
          </div>

          <div class="input-field col s12">
            <input name="email" id="email" type="text" class="validate">
            <label for="email">Password</label>
          </div>

          <div class="col s12">
            <button id ="colaborator"class="btn modal-btn waves-effect waves-light" type="submit" name="action">Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
