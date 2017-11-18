<html>
<head>
  <title>Perritos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://use.fontawesome.com/976e5e17b3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>

  </head>
  <body>
    <!--navbar -->
    <nav class="z-depth-0 white">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="black-text" id="button-personal">Login</a></li>
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
                <a class="waves-effect waves-light btn search-btn btn-small margin-left-s">Search</a>
              </div>
            </div>
          </div>
      </form>
      </div>
   </div>

   <footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>

  </body>
</html>
<script>
$( document ).ready(function() {
   $('.parallax').parallax();
   $(".button-collapse").sideNav();
});
</script>
