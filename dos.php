<?php
  
include("Modelo/conectaDb.php");


$sql ="CALL MENSAJECOBRAR()";

$respuesta = mysqli_query($conexion, $sql);

while($filas = mysqli_fetch_array($respuesta)){
	$telefono =$filas['telefono'];
	
		
	echo "$telefono,";
  
}
?>


