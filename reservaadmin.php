<?php
include("funciones/setup.php");

session_start();

if (isset($_SESSION['usuario_sesion2'])) {
    // code...
  if (isset($_GET['Rut'])) {
    $sql_usu ="SELECT * FROM administradores WHERE Rut='".$_GET['Rut']."'";
    $result_usu = mysqli_query(conecta(),$sql_usu);
    $datos_usu = mysqli_fetch_array($result_usu);
  }
  


  ?>
 


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
  <script src="js/validar_form_registro.js"></script>
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


<body id="page-top" class="img-fluid" alt="Responsive image" background="img/fondojohann.jfif" >


 
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--script para javascript para que carga el modal -->
<script>
       
   $(document).ready(function()
   {
      $("#Modal").modal("show");
   });
</script>
</body>
</html>

    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 col-8 container">


    

    <img src="img/herradura.png" class="img-fluid" alt="Responsive image">



    
<br>
<br>
      <div class="card">
        
        <h2 class="card-header text-center">Reservar Hora</h2>
        <div class="card-body">
        <form id="form" name="form"  method="post" action="procesa_reservaadmin.php">
         <div class="form-group">
          <label for="exampleInputEmail1">Seleccione Fecha</label><br>
          <input class="form-control" name="fecha" id="datepicker"  required=""  readonly="" placeholder="Seleccione Fecha" /> 
         <div class="form-group">

         <div class="form-group">
          <label for="exampleInputEmail1">Rut Cliente</label><br>
          <input class="form-control" id="rut" oninput="checkRut(this)" maxlength="10" required="" name="rut" type="text"  placeholder="Ingrese Rut" autocomplete="off" onBlur="comprobarUsuario()">
              <span id="estadorut" ></span>
         <div class="form-group">

         <div class="form-group">
             <label for="input-select">Barberos</label>
            <select name ="barbero"class="form-control" id="barbero"  >
               <option value="0" >Seleccione Barbero</option> 
            </select>
         </div>

                <label for="input-select">Horas Disponibles</label>
            <select name="hora"class="form-control" id="hora">
              <option value="0">Seleccione hora</option>
            </select>
         </div>

           <div class="form-group">
           <label for="input-select">Servicios</label>
            <select name="servicio" class="form-control" id="servicio">
             <option value="0">Seleccione el Servicio</option>
               <?php
               $sql = "SELECT *
               from servicios" ;
               $resultado = mysqli_query(conecta(), $sql);
               while($datos=mysqli_fetch_array($resultado))
               {
                ?>

                <option value="<?php echo $datos['ID_Servicio'];?>"> <?php echo $datos['Nombre']?> </option>
                <?php

              }
              echo '';
              ?>
           </select>
         </div>


         <button type="button" class="btn btn-primary "  onclick="validar (this.value)">Reservar Hora</button>
         <input type="hidden" name="accion" id="accion" />   
 <input type="hidden" name="Rut" id="Rut" value="<?php $_SESSION['Rut']?>" />
 <button type="button" onclick="location.href='user.php';" class="btn btn-space btn-dark ">Cancelar</button>
        </form>
        
      </div>
   </div>





  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>


      
<!--script para javascript para que carga el modal -->

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
  <script src="js/datapicker.js"></script>


  <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<script>
function comprobarUsuario() {
  
  jQuery.ajax({
  url: "ComprobarDisponibilidad.php",
  data:'Rut='+$("#Rut").val(),
  type: "POST",
  success:function(data){
    $("#estadorut").html(data);
   
  },
  error:function (){}
  });
}
</script>


<script>
$(function() {
    $( "#datepicker" ).datepicker(
    {
minDate: 0,
closeText: 'Cerrar',
currentText: 'Hoy',
monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
weekHeader: 'Sm',
dateFormat: 'yy-mm-dd',
firstDay: 1,
isRTL: false,
showMonthAfterYear: false,

beforeShowDay: function(d) {
            var day = d.getDay();
            return [(day != 2 )];
        }
    });
  });
  </script>

<script type="text/javascript"> 



$('#barbero').on("change", function(){
      var fecha= $('#datepicker').val();
      var barbero=$('#barbero').val();
       
      $.ajax({
        url:"horas.php?fecha="+fecha+"&barbero="+barbero,
        type:"GET",
        data: {},
        success:  function (data) {
          $('#hora').html('');
           $('#hora').html(data);
        }
      })
    });
  $('#datepicker').on("change", function(){
      //$('#barbero').val(0);
    var fecha= $('#datepicker').val();
    var barbero=$('#barbero').val();
    $.ajax({
        url:"buscarbarbero.php?fecha="+fecha+"&barbero="+barbero,
        type:"GET",
        data: {},
        success:  function (data) {
          $('#barbero').html('');
           $('#barbero').html(data);
        }
      }) 
      $('#hora').val(0);
      $('#servicio').val(0);
    });

  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

</body>
</html>


<?php
}
else{
  header("Location:error.php");
}
?>


