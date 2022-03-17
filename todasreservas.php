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



  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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


 <!-- DataTales Example -->


 <br>
 <br>


 <?php
                                            
                                            $fechahoy = date("Y/m/d");
                                                                                                                                     
                                                                                        
                                            $sql="SELECT ID_Reserva,  clientes.Rut, clientes.Nombre, clientes.Apellido,   servicios.Nombre AS Servicio, horarios.Horas, reservas.Fecha
                                            FROM clientes
                                            INNER JOIN reservas ON clientes.Rut=reservas.Rut
                                            INNER JOIN servicios ON reservas.Servicio = servicios.ID_Servicio
                                            INNER JOIN horarios ON reservas.ID_Horario = horarios.ID_Horario
                                            WHERE ID_Barbero = 1
                                            ORDER BY Fecha, reservas.ID_Horario ASC";
                                                                                        
                                                                                        
                                                                                        
                                            $resultado = mysqli_query(conecta(), $sql);
                                            
                                            ?>

 
 <div class="card shadow mb-4">
  
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Historial reservas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                   
                                        <tr>
                                        <th>ID_Reserva</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
               
             
               <th>Servicio</th>
               <th>Hora</th>
               <th>Fecha</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID_Reserva</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
            
             
               <th>Servicio</th>
               <th>Hora</th>
               <th>Fecha</th>
                                            
                                        </tr>
                                    </tfoot>

            
                                    <tbody>
                                 
                                        <tr>
                                             <?php
                while($datos=mysqli_fetch_array($resultado))
                {
              ?>
                                        <td  class="mostrar">  <img  width="30" heigth="30"src="img/logo.jpg"><?php if(isset($datos['ID_Reserva'])){echo $datos['ID_Reserva'];} ?>&nbsp;</td>
                                        <td  class="mostrar"> <?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                
           
                <td  class="mostrar"><?php if(isset($datos['Servicio'])){echo $datos['Servicio'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Horas'])){echo $datos['Horas'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Fecha'])){echo $datos['Fecha'];} ?>&nbsp;</td>
                                            
                                        </tr>
                                        <?php
                }
              ?>
                                        
                                    </tbody>
                                    
                                </table>
                              
                            </div>
                        </div>
                    </div>






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>



  <!-- Page level custom scripts -->

  <script src="js/validarRUT.js"></script>


  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>



  <script src="js/validarRUT.js"></script>

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


  <?php
}
else{
  header("Location:error.php");
}
?>