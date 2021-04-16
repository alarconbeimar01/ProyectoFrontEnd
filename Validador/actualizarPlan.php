<?php
$ref=$_POST['ref'];	
$nombre=$_POST['nombre'];	
$valor=$_POST['valor'];	



include("../Modelo/conectaDb.php");


$sql ="CALL ACTUALIZARPLAN('$ref','$nombre','$valor')";

$respuesta = mysqli_query($conexion, $sql);

if($respuesta == 1){
	
	header("location:../listarPlanes.php");
	
	
}
elseif($respuesta == -1){
header("location:../listarPlanes.php");	
};

?>