<?php

$nombre=$_POST['nombre'];	
$documento = $_POST['doc'];	
$telefono = $_POST['tel'];	
$mail = $_POST['mail'];
$plan = $_POST['plan'];	
$ciudad = $_POST['ciudad'];	
$direccion = $_POST['direccion'];	

include("../Modelo/conectaDb.php");

$sql ="CALL NUEVOCLIENTE ('$documento','$nombre','$telefono','$mail','$plan','$ciudad','$direccion')";


mysqli_query($conexion, $sql);
	
$registrado = mysqli_affected_rows($conexion);


if($registrado == 1){
	
	header("location:../entrada.php?Mensaje=cliente1");
	
	
}
elseif($registrado == -1){
header("location:../entrada.php?Mensaje=cliente2");	
};

?>

