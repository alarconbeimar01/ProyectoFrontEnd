<?php
	include( 'profile.php' );
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<div class="login-main">
  <?php
  
include("Modelo/conectaDb.php");


$sql ="CALL PORCOBRAR()";

$respuesta = mysqli_query($conexion, $sql);
?>

  <h2 align="center"> Pendietes de Corte
</h2>

<div align="center">
  <table width="auto%" border="1">
      
      
    <tr>
        <th bgcolor="#CCFFFF" scope="col"><div align="center">cc</div></th>
        <th bgcolor="#CCFFFF" scope="col">mes</th>
        <th bgcolor="#CCFFFF" scope="col">nomCliente</th>
        <th bgcolor="#CCFFFF" scope="col">ciudad</th>
      <th bgcolor="#CCFFFF" scope="col"><div align="center">direccion</div></th>
      <th bgcolor="#CCFFFF" scope="col">telefono</th>
      <th bgcolor="#CCFFFF" scope="col"><div align="center">Ver</div></th>
    </tr>
    <?php
while($filas = mysqli_fetch_array($respuesta)){
	$refCliente =$filas['refCliente'];	
	$cc =$filas['cc'];
	$mes = $filas['mes'];
	$nomCliente = $filas['nomCliente'];
	$ciudad =$filas['ciudad'];
	$direccion =$filas['direccion'];
	$telefono =$filas['telefono'];
		
		?>
    <tr>
      <td><?php echo $cc?></td>
      <td><?php echo $mes?></td>
      <td><?php echo $nomCliente?></td>
      <td><?php echo $ciudad?></td>
      <td><?php echo $direccion?></td>
      <td><a href="https://api.whatsapp.com/send?phone=57<?php echo $telefono?>&text=Cordial saludo, recuerda cancelar tu plan de internet, evita suspención..."><?php echo $telefono?></a></td>
      <td><form action="suspenderCliente.php" method="post" name="cortarCliente"> 
      <input type="hidden" hidden="" name="refCliente" id="refCliente" value="<?php echo $refCliente?>" />
      <input type="submit" name="ver" value="Ver" />
      </form>
      </td>
    </tr>
    <?php    
}
?>
  </table>
    
</div>
<div align="center"></div>
<div align="center"></div>
<div align="center">
  <p>&nbsp;</p>
  <? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</body>

</html>