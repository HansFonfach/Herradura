<?php
	include("funciones/setup.php");
	conecta();
	session_start();
$Rut=$_SESSION['Rut'];
$id_barbero=$_POST['barbero']; 
$id_horario=$_POST['hora']; 
$servicio=$_POST['servicio'];     
$fecha=$_POST['fecha'];




if($Rut==''){

echo '<script language="javascript">alert("Su sesion ha expirado, porfavor ingrese nuevamente.");
		window.location.href="index.html";
		</script>';



}else{





$sql = "INSERT INTO reservas (Rut, ID_Barbero, ID_Horario, Servicio, Fecha) VALUES ('".$Rut."',".$id_barbero.",".$id_horario.",".$servicio.",'".$fecha."')";


$resultado = mysqli_query(conecta(),$sql);

}




if(!$resultado){



		echo '<script language="javascript">alert("Hubo un problema al reservar tu hora, porfavor intentalo nuevamente.");
		window.location.href="reserva_usuario.php";
		</script>';

	

}else{
	header("Location:reserva_exito.php");


}


mysqli_close($enlace);



?>