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


$sql ="CALL LISTARPLANES()";

$respuesta = mysqli_query($conexion, $sql);
?>

  <h2 align="center"> Listado de Planes
</h2>

<table width="95%" border="1">


  <tr>
      <th scope="col"><div align="center">Descripción</div></th>
    <th scope="col"><div align="center">Precio</div></th>
    <th scope="col"><div align="center"></div></th>
  </tr>
  <?php
while($filas = mysqli_fetch_array($respuesta)){
	$plan =$filas['nombre'];
	$valor = $filas['costo'];
	$ref = $filas['idPlan'];
		
		?>
  <tr>
    <td><div align="center"><?php echo $plan?></div></td>
    <td><div align="center"><?php echo $valor?></div></td>
    <td><div align="center">
      <form action="verPlan.php" method="post" name="vercliente">
        <input type="hidden" hidden="" value="<?php echo $ref;?>" name="ref" id="ref" />
        <input type="submit" name="editar" id="editar" value="Editar" />
        </form>
      
    </div></td>
  </tr>
  <?php    
}
?>
</table>
<div align="center"><form action="nuevoPlan.php">
      <div align="center">
        <input type="submit" value="Agregar Plan" />
      </div>

    </form></div>
<div align="center"><br>
  <? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</body>

</html>