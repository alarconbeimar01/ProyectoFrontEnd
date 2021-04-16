<?php
include('../session.php');
?>
<?php
$cobro=$_POST['cobro'];	
$usuario=$_POST['usuario'];	
$refCliente=$_POST['refCliente'];	



include("../Modelo/conectaDb.php");


$sql ="CALL RECAUDAR('$usuario','$cobro','$refCliente')";

$respuesta = mysqli_query($conexion, $sql);

$registrado = mysqli_affected_rows($conexion); // filas afectadas
echo $registrado;

if($registrado >= 0){
	$pago=md5($cobro);
header("location:../imprimirRecaudo.php?recaudo=$cobro&seguridad=$pago");
	
	
}
elseif($registrado == -1){
	
	
header("location:../imprimirRecaudo.php?recaudo=error");	
};

?>