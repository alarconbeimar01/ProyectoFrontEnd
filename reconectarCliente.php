<?php
	include( 'profile.php' );
	?>

<body>
<div class="login-main" align="center">
<?php

$ref=$_POST['refCliente'];	
$idSuspension=$_POST['idSuspension'];


include("Modelo/conectaDb.php");


$sql ="CALL INFOCLIENTE('$ref')";

$respuesta = mysqli_query($conexion, $sql);

?><h2 align="center"> Info Cliente  </h2>

<div align="left">
  <table width="95%" border="1">
    <tr>
      <?php
$filas = mysqli_fetch_array($respuesta);
	$ip =$filas['ip'];
	$ns =$filas['ns'];
	$nombre =$filas['nombre'];
	$documento = $filas['cc'];
	$estadoCliente = $filas['estado'];
	$identificacion = $filas['identificacion'];
	$plan = $filas['plan'];
	$estadoPlan = $filas['estadoPlan'];
	$registro = $filas['fechaRegistro'];
	$ciudad = $filas['ciudad'];
	$direccion = $filas['direccion'];
	$telefono = $filas['telefono']; 
	$idUsuario = $login_sessions;
	$priUsuario = $login_sessionPrivilegios;
?>
      
      <th scope="row"><div align="left">CC ó Nit</div></th>
      <td><div align="left"><?php echo $documento?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Nombre</div></th>
      <td><div align="left"><?php echo $nombre?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left" >Plan</div></th>
      <td><div align="left"><?php echo $plan?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Ciudad</div></th>
      <td><div align="left"><?php echo $ciudad?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Dirección</div></th>
      <td><div align="left"><?php echo $direccion ?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Teléfono</div></th>
      <td><div align="left"><?php echo $telefono?></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Fecha </div></th>
      <td><?php echo $registro?></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Ref:  </div></th>
      <td><?php echo $ip?></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">N/S : </div></th>
      <td><?php echo $ns?></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><div align="left">
      <form action="Validador/validarReconectar.php" name="instalar" method="post">
      <input type="hidden" hidden="" name="cliente" id="cliente" value="<?php echo $identificacion?>">
      
      <input type="hidden" hidden="" name="usuario" id="usuario" value="<?php echo $idUsuario?>">
      
      <input type="hidden" hidden="" name="suspension" id="suspension" value="<?php echo $idSuspension?>">
      
      <input type="submit" name="boton" id="boton" value="Reconectar">
           </form>
        
      </div></th>
      </tr>
    
      </table>
  <div align="center"></div>
  <div align="center"></div>
       
  </div> 
                
          <? echo '<a href="porReconectar.php"><h2>Regresar</h2></a>'; ?>
          </div>
      </div>
    
</div>

</body>
</html>