<?php
include('../session.php');
?>
<?php
$ref=$_POST['cliente'];	
$usu=$_POST['usuario'];	


include("../Modelo/conectaDb.php");


$sql ="CALL SUSPENDER('$usu','$ref')";

$respuesta = mysqli_query($conexion, $sql);

$registrado = mysqli_affected_rows($conexion); // filas afectadas


if($registrado == '1'){
	
	header("location:../porSuspender.php?Mensaje=Suspender1");
	
	
}
elseif($registrado == '-1'){
header("location:../porSuspender.php?Mensaje=Suspender2");	
};

?>