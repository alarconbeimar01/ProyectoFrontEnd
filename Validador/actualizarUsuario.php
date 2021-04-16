<?php
$ref=$_POST['idUsuario'];	
$tel=$_POST['telefono'];	
$mail=$_POST['mail'];	
$rol=$_POST['rol'];	
$estado=$_POST['estado'];	


include("../Modelo/conectaDb.php");


$sql ="$actualizarUsuario('$ref','$tel','$mail','$rol','$estado')";

$respuesta = mysqli_query($conexion, $sql);

if($respuesta == 1){
	
	header("location:../listarUsuarios.php");
	
	
}
elseif($respuesta == -1){
header("location:../listarUsuarios.php");	
};

?>
