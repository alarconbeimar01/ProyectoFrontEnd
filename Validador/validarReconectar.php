<?php
include('../session.php');
?>
<?php
$ref=$_POST['cliente'];	
$usu=$_POST['usuario'];
$suspension	=$_POST['suspension'];


include("../Modelo/conectaDb.php");



$sql ="CALL RECONECTARCLIENTE('$usu','$ref','$suspension')";

$respuesta = mysqli_query($conexion, $sql);

$registrado = mysqli_affected_rows($conexion); // filas afectadas


if($registrado == '1'){
	
	header("location:../porReconectar.php?Mensaje=Suspender1");
	
	
}
elseif($registrado == '-1'){
header("location:../porReconectar.php?Mensaje=Suspender2");	
};

?>