<?php
include('../session.php');
?>
<?php

$usu=$_POST['usuario'];		
$mes=$_POST['mes'];	
	

include("../Modelo/conectaDb.php");



$sql ="INSERT INTO Cobrar ( Cobrar.clienteCobrar, Cobrar.valorCobrar, Cobrar.planCobrar, Cobrar.usuarioCobrar , Cobrar.mesCobrar)SELECT Clientes.idCliente,  TipoPlan.valorTipoPlan, TipoPlan.idTipoPlan, '".$usu."', '".$mes."' FROM Clientes, TipoPlan WHERE Clientes.planCliente = TipoPlan.idTipoPlan AND Clientes.estadoPlanCliente = 1 AND Clientes.primerPagoCliente=1";

$respuesta = mysqli_query($conexion, $sql);

$registrado = mysqli_affected_rows($conexion); // filas afectadas

 echo $registrado;
if($registrado >= '1'){
	
	header("location:../generarCobrar.php?Mensaje=mensualidad1");
	
	
}
elseif($registrado == '-1'){
header("location:../generarCobrar.php?Mensaje=mensualidad2");	
}
elseif($registrado == '0'){
header("location:../generarCobrar.php?Mensaje=mensualidad1");	
};


?>