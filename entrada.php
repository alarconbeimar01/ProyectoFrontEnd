	<?php
	include( 'profile.php' );
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>

<body>


<div align="center">
  <?php
$pri = $login_sessionPrivilegios;
if (isset($_REQUEST['Mensaje']))
{

$mensaje = $_REQUEST['Mensaje'];


if($mensaje=="Instalacion1"){
	
	echo " <span> ¡ Registro de Instalación exitosa !</span>";
	}
elseif($mensaje=="Instalacion2"){
	echo "<span> ¡Verifique el estado de la instalación!</span>";
}
elseif($mensaje=="cliente1"){
	echo "<span> ¡Registro de cliente exitoso!</span>";
}
elseif($mensaje=="cliente2"){
	echo "<span> ¡Verifique, error al registrar el cliente!</span>";
}
}
?>
</div>
<div class="login-main" align="center">
  <table width="95%" border="0"><? if ($pri ==1 || $pri==2){ ?>
  <tr>

    <td><form action="porInstalar.php">
      <div align="center">
        <input type="submit" value="Por Instalar" />
      </div>
    </form></td>
    </tr><? } ?><? if ($pri ==1 || $pri==3){ ?>
  <tr>

    <td><form action="nuevoCliente.php">
      <div align="center">
        <input type="submit" value="Nuevo Cliente" />
      </div>
    </form></td>
    </tr><? } ?><? if ($pri ==1){ ?>
  <tr>

    <td><form action="generarCobrar.php">
      <div align="center">
        <input type="submit" value=" Generar Cobrar" />
      </div>
    </form></td>
    </tr><? } ?><? if ($pri ==1 || $pri==3){ ?>
  <tr>

    <td><div align="center"></div><form action="recaudar.php">
      <div align="center">
        <input type="submit" value="Recaudar" />
      </div>
    </form></td>
    </tr>
	<tr>

    <td><div align="center"></div><form action="reporteRecaudo.php">
      <div align="center">
        <input type="submit" value="Reporte Recaudo" />
      </div>
    </form></td>
    </tr><? } ?><? if ($pri ==1 ){ ?>

  <tr>
    <td><div align="center"><form action="listarClientes.php">
      <div align="center">
        <input type="submit" value="Clientes" />
      </div>
    </form></div></td>
    </tr>
  <tr>
    <td><div align="center"><form action="listarUsuarios.php">
      <div align="center">
        <input type="submit" value="Usuarios" />
      </div>
    </form></div></td>
    </tr>
  <tr>
    <td><div align="center"><form action="listarPlanes.php">
      <div align="center">
        <input type="submit" value="Planes" />
      </div>
    </form></div></td>
    </tr><? } ?><? if ($pri ==1 || $pri==2 ){ ?>
	 <tr>
    <td><div align="center"><form action="porSuspender.php">
      <div align="center">
        <input type="submit" value="Por Suspender" />
      </div>
    </form></div></td>
    </tr>
    
    <tr>
    <td><div align="center"><form action="porReconectar.php">
      <div align="center">
        <input type="submit" value="Por Reconectar" />
      </div>
    </form></div></td>
    </tr>
    
	<? } ?>
</table>


</div>
</body>
</html>