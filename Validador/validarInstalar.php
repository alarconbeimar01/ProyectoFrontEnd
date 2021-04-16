<?php
include('../session.php');
?>
<?php
$ref=$_POST['identificacion'];	
$usu=$_POST['usuario'];	
$ns=$_POST['ns'];	
$ip=$_POST['ip'];

$totalFacturar=$_POST['totalFacturar'];	
$integrado=$_POST['integrado'];		
$refPlan=$_POST['refPlan'];					


include("../Modelo/conectaDb.php");


$sql ="CALL INSTALAR('$usu','$ref','$ns','$ip','$totalFacturar','$integrado','$refPlan')";

$respuesta = mysqli_query($conexion, $sql);

$registrado = mysqli_affected_rows($conexion); // filas afectadas

echo $registrado;
if($registrado == '1'){
	
	header("location:../entrada.php?Mensaje=Instalacion1");
	
	
}
elseif($registrado == '-1'){
header("location:../entrada.php?Mensaje=Instalacion2");	
};

?>

