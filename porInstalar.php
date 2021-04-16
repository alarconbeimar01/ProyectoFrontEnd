<?php
	include( 'profile.php' );
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Por Instalar</title>
</head>

<body>
<div class="login-main">


  <?php
  
include("Modelo/conectaDb.php");


$sql ="CALL PORINSTALAR()";
$respuesta = mysqli_query($conexion, $sql);
?>

  
<h2 align="center">Instalaciones Pendientes</h2>

<table width="95%" border="1">


  <tr>
      <th scope="col"><div align="center">Nombre</div></th>
    <th scope="col"><div align="center">Documento</div></th>
    <th scope="col"><div align="center">Ciudad</div></th>
    <th scope="col"><div align="center"></div></th>
  </tr>
  <?php
while($filas = mysqli_fetch_array($respuesta)){
	$nombre =$filas['nombre'];
	$cc = $filas['cc'];
	$identificacion = $filas['identificacion'];
	$ciudad = $filas['ciudad'];
	?>	
	
  <tr>
    <td><div align="center"><?php echo $nombre ;?></div></td>
    <td><div align="center"><?php echo $cc;?></div></td>
    <td><div align="center"><?php echo $ciudad;?></div></td>
    <td><div align="center">
    <form action="instalar.php" method="post" name="vercliente">
    <input type="hidden" hidden="" value="<?php echo $identificacion;?>" name="idCliente" id="idCliente" />
    <input type="submit" name="enviar" id="enviar" value="Ver" />
    </form>
    
    </div></td>
  </tr>
  <?php    
}
?>
</table>
<div align="center">
<? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</div>
</body>
</html>