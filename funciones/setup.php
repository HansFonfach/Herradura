
<?php
function conecta()
{
	
	$ruta=mysqli_connect("localhost", "root", "", "herradura");
	return $ruta;
}
?>
