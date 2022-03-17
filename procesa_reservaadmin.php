<?php
	include("funciones/setup.php");
	conecta();
	session_start();


$Rut=$_POST['rut'];
$id_barbero=$_POST['barbero']; 
$id_horario=$_POST['hora']; 
$servicio=$_POST['servicio'];     
$fecha=$_POST['fecha'];




$sql = "INSERT INTO reservas (Rut, ID_Barbero, ID_Horario, Servicio, Fecha) VALUES ('".$Rut."',".$id_barbero.",".$id_horario.",".$servicio.",'".$fecha."')";


$resultado = mysqli_query(conecta(),$sql);


if(!$resultado){
	header("Location:reservaadmin.php?sql");
	

}else{
	header("Location:reserva_exitoadmin.php");
	

}


mysqli_close($enlace);



?>