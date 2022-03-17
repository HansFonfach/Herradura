<?php
include("funciones/setup.php");

session_start();

if (isset($_SESSION['usuario_sesion'])) {
    // code...
  if (isset($_GET['Rut'])) {
    $sql_usu ="SELECT * FROM clientes WHERE Rut='".$_GET['Rut']."'";
    $result_usu = mysqli_query(conecta(),$sql_usu);
    $datos_usu = mysqli_fetch_array($result_usu);
  }
  


  ?>

  

  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Agenda Herradura Salon</title>
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

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/usermenu.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top" class="img-fluid" alt="Responsive image" background="img/fondojohann.jfif" >


<div class="box">
    <div class="container">
    
     	<div class="row">

			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                    <img src="img/calendar.jpg" width="90" height="90">
                        
						<div class="title">
							<h4>Reserva de hora</h4>
						</div>
                        
						<div class="text">
							<span>Aquí podrás acceder al menú para agendar tu hora con anticipación.</span>
						</div>
                        
						<a href="reserva_usuario.php">Agendar</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
                    <img src="img/cancelar.png" width="90" height="90">
                    
						<div class="title">
							<h4>Cancelar hora</h4>
						</div>
                        
						<div class="text">
							<span>¿No podrás asistir? Cancela tu hora hasta al menos 2 horas antes de asistir.</span>
						</div>
                        
						<a href="cancelar_hora.php">Cancelar</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                    <img src="img/historial2.png" width="90" height="90">
                        
						<div class="title">
							<h4>Historial de reservas</h4>
						</div>
                        
						<div class="text">
							<span>Aquí podrás visualizar todas tus reservas de horas a lo largo de todo el tiempo.</span>
						</div>
                        
						<a href="historial_reserva.php">Ver historial</a>
                        
					 </div>
				</div>	 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
			   <div class="box-part text-center">
				   
			   <img src="img/edit.png" width="90" height="90"> 
			   
				   <div class="title">
					   <h4>Contactanos</h4>
				   </div>
				   
				   <div class="text">
				 <span>Estamos ubicados en Calle Independencia #187</span>
             <span>Teléfono: +569 56702989</span>
             <span> contacto@agendaherradurasalon.cl </span>
				   </div>
				   
				   <a href="modificardatos.php">Modificar datos</a>
				   
				</div>
		   </div>	 
				
				
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                    <img src="img/logout-512.png" width="90" height="90">
                        
						<div class="title">
							<h4>Cierre de sesión</h4>
						</div>
                        
						<div class="text">
							<span>¿Ya te vas? Agradecemos tu preferencias, vuelve pronto.</span>
						</div>
                        
						<a href="cerrarsesion.php">Cerrar sesión</a>
                        
					 </div>
				</div>
		
		</div>		
    </div>




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>


<?php
}
else{
  header("Location:error.php");
}
?>
