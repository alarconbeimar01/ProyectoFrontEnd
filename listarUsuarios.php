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


$sql ="CALL LISTARUSUARIOS()";

$respuesta = mysqli_query($conexion, $sql);
?>

  
</p>

<table width="95%" border="1">


  <tr>
      <th scope="col"><div align="center">Usuario</div></th>
    <th scope="col"><div align="center">Rol</div></th>
    <th scope="col"><div align="center">Estado</div></th>
    <th scope="col"><div align="center"></div></th>
  </tr>
  <?php
while($filas = mysqli_fetch_array($respuesta)){
	$nombre =$filas['nombre'];
	$rol = $filas['rol'];
	$estado = $filas['estado'];
	$identificacion = $filas['identificacion'];
	$idUsuario = $login_sessions;
	$priUsuario = $login_sessionPrivilegios;
	if($estado==1){
		$refEstado="Activo";
	}
	elseif($estado==2){
		$refEstado="Bloqueado";		
	}
	
	
	
	if($rol==0){
		$refRol="Sin Definir";
	}
	elseif($rol==2){
		$refRol="Técnico";		
	}
	elseif($rol==1){
		$refRol="Admin";		
	}
	elseif($rol==3){
		$refRol="Recaudo";		
	}
		?>
  <tr>
    <td><div align="center"><?php echo "$nombre"?></div></td>
    <td><div align="center"><?php echo $refRol?></div></td>
    <td><div align="center"><?php echo $refEstado;?></div></td>
    <td><div align="center">
    <form action="verUsuario.php" method="post" name="vercliente">
    <input type="hidden" hidden="" value="<?php echo $identificacion;?>" name="idUsuario" id="idUsuario" />
    <input type="submit" name="enviar" id="enviar" value="Ver" />
    </form>
    
    </div></td>
  </tr>
  <?php    
}
?>
</table>

</div>
</div>
<div align="center"><br>
  <? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</body>

</html>