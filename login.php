<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevFolio Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/login.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top" background="img/fondojohann.jfif" >

  <div class="container">
    <div class="row">
      
      <div class="col-sm">
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div class="fadeIn first">
              <img src="img/logo.jpg" id="icon" alt="User Icon " class="img-circle" />
            </div>
        
            <!-- Login Form -->
            <form action="procesa_login.php" method="POST">
              <input type="text" id="Rut" oninput="checkRut(this)" required="" maxlength="10" class="fadeIn second" name="Rut" placeholder="Rut">
              <input type="password" id="Pass" class="fadeIn third" required="" name="Pass" placeholder="Contrase??a">
              <br><br>
              <button type="submit" class="btn btn-dark btn-lg ">Iniciar Sesion</button>
            </form>
            <br>
            <!-- Remind Passowrd -->
            <div id="formFooter">
              <a class="underlineHover text-primary" href="registro.php">Registrarme</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover text-danger" href="#">??Olvidaste tu contrase??a?</a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
    <script src="js/validarRUT.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
