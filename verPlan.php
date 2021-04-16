<?php
	include( 'profile.php' );
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Cliente</title>
</head>

<body>
<div class="login-main" align="center">
<?php

$ref=$_POST['ref'];



include("Modelo/conectaDb.php");


$sql ="$verPlan('$ref')";


$respuesta = mysqli_query($conexion, $sql);
$filas = mysqli_fetch_array($respuesta);

	$idRef =$filas['idRef'];
	$nombre = $filas['nombre'];
	$valor = $filas['valor'];
	$priUsuario =$login_sessionPrivilegios;
	
?>
<?php
	  if($priUsuario==1){
	  ?>
<h2 align="center"> Info PLAN  </h2>

      
      <br>
      <form action="Validador/actualizarPlan.php" method="post" name="actualizarUsuario">
      <table width="95%" border="1">
  
  <tr>
    <th scope="row">Nombre :</th>
    <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" /></td>
  </tr>
  <tr>
    <th scope="row">Valor :</th>
    <td><input type="number" name="valor" id="valor" value="<?php echo $valor?>" />
    
    <input type="hidden" name="ref" id="ref" value="<?php echo $idRef?>" hidden="" />
	</td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="actualizar" value="Actualizar"></th>
  </tr>
</table>
</form>

        
    <?php
	  }
	  ?>    

</div>       
    <div align="center"><br>
  <? echo '<a href="listarPlanes.php"><h2>Regresar</h2></a>'; ?>
</div>

</body>
</html>