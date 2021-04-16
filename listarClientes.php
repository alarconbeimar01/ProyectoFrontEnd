<?php
	include( 'profile.php' );
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Clientes</title>
</head>

<body>

<form action="#" method="post" name="buscador">
<div align="center">
  <div align="center">
    <div align="center">
      <div align="center">
        <input type="number" name="buscar" id="buscar" required>
        <input type="submit" name="enviar" value="Buscar">
      </div>
</form>
      <br />
      <div class="login-main">
      
      <?php
  
include("Modelo/conectaDb.php");

if (isset($_REQUEST['buscar']))
{
	$cli =$_POST['buscar'];
	$sql ="CALL LISTARCLIENTE($cli)";
}
else{

$sql ="CALL LISTARCLIENTES()";
}
$respuesta = mysqli_query($conexion, $sql);
?>
      
      
      </p>
      
      <table width="95%" border="1">
      
      
      
      
    </div>
<tr>
  <th scope="col"><div align="center">Nombre</div></th>
    <th scope="col"><div align="center">Documento</div></th>
    <th scope="col"><div align="center">Estado</div></th>
    <th scope="col"><div align="center"></div></th>
</tr>
  <?php
while($filas = mysqli_fetch_array($respuesta)){
	$nombre =$filas['nombre'];
	$documento = $filas['cc'];
	$estado = $filas['estado'];
	$identificacion = $filas['identificacion'];
	$idUsuario = $login_sessions;
	$priUsuario = $login_sessionPrivilegios;
	
	if($estado==3){
		$estado1="Pendiente";
		$color = "blue";
	}
	elseif($estado==2){
		$estado1="Inactivo";		
	}
	elseif($estado==1){
		$estado1="Activo";
		$color = "green";		
	}
	elseif($estado==4){
		$estado1="Suspendido";	
		$color = "red";	
	}
		?>
  <tr>
    <td><div align="center"><?php echo "$nombre"?></div></td>
    <td><div align="center"><?php echo $documento;?></div></td>
    <td><div align="center" style="color:<?php echo $color;?>"><?php echo $estado1;?></div></td>
    <td><div align="center">
<form action="verCliente.php" method="post" name="vercliente">
    <input type="hidden" hidden="" value="<?php echo $identificacion;?>" name="idCliente" id="idCliente" />
    <input type="submit" name="enviar" id="enviar" value="Ver" />
</form>
    
    </div></td>
  </tr>
  <?php    
}
?>
</table>
</div>
<div align="center"><br>
  <? echo '<a href="index.php"><h2>Regresar</h2></a>'; ?>
</div>
</div>
</body>

</html>