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
<h2 align="center"> Registro de Cliente </h2>
<form action="Validador/nuevoClienteV.php" method="post" name="nuevoCliente">
<div align="center">
  <table width="90%" border="1">
    <tr>
      <td>Nombre :</td>
      <td><input type="text" name="nombre" id="nombre" required="required"  /></td>
      </tr>
    <tr>
      <td>CC ó Nit :</td>
      <td><input type="number"  name="doc" id="doc" required="required"  /></td>
      </tr>
    <tr>
      <td>Teléfono :</td>
      <td><input type="number" name="tel" id="tel" required="required"  /></td>
      </tr>
    <tr>
      <td>e-mail :</td>
      <td><input type="email" name="mail" id="mail" /> </td>
      </tr>
    <tr>
      <td>Ciudad :</td>
      <td><select name="ciudad" id="ciudad" >
        <option >Seleccione</option>
        <option value="Génova">Génova </option>
        
        
        </select></td>
      </tr>
    <tr>
      <td>Direccion :</td>
      <td><input type="text" name="direccion" id="direccion" required="required"  /></td>
      </tr>
    <tr>
      <td>Plan</td>
      
      <?php
  
include("Modelo/conectaDb.php");


$sql ="CALL LISTARPLANES()";

$respuesta = mysqli_query($conexion, $sql);
?>

      <td><select name="plan" id="plan">
        <option >Seleccione</option>
        
        <?php
while($opciones = mysqli_fetch_array($respuesta)){
	$idPlan = $opciones['idPlan'];
	$nombre =$opciones['nombre'];
	$costo = $opciones['costo'];
		?>
        <option value="<?php echo $idPlan?>"><?php echo "$nombre $ $costo"?> </option>
<?php } ?>
        </select></td>
      </tr>
    <tr>
      <td colspan="2">
        <input type="hidden" value="1" name="usuario" id="usuario" hidden=""/>
        <input type="submit" name="submit" value="Registrar Cliente" /></td>
      </tr>
  </table>
  </form>
</div>
<p align="center"><?php

if (isset($_REQUEST['Mensaje']))
{

$mensaje = $_REQUEST['Mensaje'];


if($mensaje==1){
	
	echo ' Usuario Registrado Exitosamente ';
	}
elseif($mensaje==2){
	echo "Error al registrar el usuario <br> verifigue sí ya existe";
}
}
?>




<div align="center">
<? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</div>
<br />
</body>
</html>