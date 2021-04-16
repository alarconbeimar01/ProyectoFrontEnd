<?php

$usuario=$_POST['usuario'];	
$pass = crypt($_POST ['password'],'Beimar');	
$telefono = $_POST['telefono'];	
$mail = $_POST['email'];

include("../Modelo/conectaDb.php");

$sql ="CALL NUEVOUSUARIO ('$usuario','$pass','$telefono','$mail')";

mysqli_query($conexion, $sql);
	
$registrado = mysqli_affected_rows($conexion);


if($registrado == 1){
	
	header("location:../registro.php?Mensaje=1");
	
	
}
elseif($registrado == -1){
header("location:../registro.php?Mensaje=2");	
};

?>

 