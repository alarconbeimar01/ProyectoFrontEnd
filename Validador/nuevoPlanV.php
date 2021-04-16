<?php

$plan=$_POST['plan'];	
$valor = $_POST['valor'];	


include("../Modelo/conectaDb.php");

$sql ="CALL NUEVOPLAN('$plan','$valor')";


mysqli_query($conexion, $sql);
	
$registrado = mysqli_affected_rows($conexion);


if($registrado >= 1){
	
	header("location:../listarPlanes.php?Mensaje=Plan1");
	
	
}
elseif($registrado == -1){
header("location:../entrada.php?Mensaje=Plan2");	
};

?>