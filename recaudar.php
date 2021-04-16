<?php
	include( 'profile.php' );
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Cliente</title>
</head>

<body>
<div  class="login-main">
<h2 align="center">Ingrese Documento</h2>
<form action="#" method="post" name="vercliente">
<div align="center">
  <table width="90%" border="1">
    <tr>
      <td>CC ó Nit :</td>
      <td><input type="number"  name="doc" id="doc" required="required" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Buscar" /></td>
    </tr>
  </table>
  </form>
</div>
<p align="center"><?php

if (isset($_REQUEST['doc']))
{

$doc = $_REQUEST['doc'];




include("Modelo/conectaDb.php");


$sql ="CALL DOCUMENTO('$doc')";

$respuesta = mysqli_query($conexion, $sql);

$filas = mysqli_fetch_array($respuesta);

	$idRecaudo =$filas['idRecaudo'];
	$mes = $filas['mes'];
	$valor = $filas['valor'];
	$plan = $filas['plan'];
	$cc = $filas['cc'];
	$nombre = $filas['nombre'];
	$ciudad = $filas['ciudad'];
	$dir = $filas['dir'];
	$refCliente = $filas['refCliente'];
	
	
$registrado = mysqli_affected_rows($conexion); // filas afectadas

	?>
<div align="center">
<h2 style="color:red"><? echo "Recaudo correspondiente al mes $mes" ?></h2>
 <table width="95%" border="1">
  <tr>
    <th scope="row">Documento:</th>
    <td><? echo $cc ?></td>
  </tr>
  <tr>
    <th scope="row">Nombre: </th>
    <td><? echo $nombre ?></td>
  </tr>
  <tr>
    <th scope="row">Ciudad:</th>
    <td><? echo $ciudad ?></td>
  </tr>
  <tr>
    <th scope="row">Dirección</th>
    <td><? echo $dir ?></td>
  </tr>
  <tr>
    <th scope="row">Plan:</th>
    <td><? echo $plan ?></td>
  </tr>
  <tr>
    <th scope="row">Valor :</th>
    <td><? echo $valor ?></td>
  </tr>
</table>
<form action="Validador/recaudarV.php" method="post" name="recaudar">

<input type="hidden" hidden="" name="refCliente" id="refCliente" value="<? echo $refCliente ?>" />

<input type="hidden" hidden="" name="cobro" id="cobro" value="<? echo $idRecaudo ?>" />
<input type="hidden" hidden="" name="usuario" id="usuario" value="<? echo $login_sessions ?>" />
<input type="submit" name="boton" id="boton" value="Recaudar" />
</form>
 </div>

 <?
}
?>


<div align="center">
<? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</div>
<br />
</body>
</html>