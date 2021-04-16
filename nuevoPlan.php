	<?php
	include( 'profile.php' );
	?>


<body>
<div  class="login-main">
<h2 align="center"> Registro de Planes </h2>
<form action="Validador/nuevoPlanV.php" method="post" name="nuevoPlan">
<div align="center">
  <table width="90%" border="1">
    <tr>
      <td>Descripción :</td>
      <td><input type="text" name="plan" id="plan" required="required"  /></td>
      </tr>
    <tr>
      <td>Valor  :</td>
      <td><input type="number"  name="valor" id="valor" required="required"  /></td>
      </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Registrar Plan" /></td>
    </tr>
  </table>
  </form>
</div>
<p align="center"><?php

if (isset($_REQUEST['Mensaje']))
{

$mensaje = $_REQUEST['Mensaje'];


if($mensaje==1){
	
	echo ' Plan Registrado Exitosamente ';
	}
elseif($mensaje==2){
	echo "Error al registrar el plan <br> verifigue ";
}
}
?>




<div align="center">
<? echo '<a href="listarPlanes.php"><h2>Regresar</h2></a>'; ?>
</div>
</div>
<br />
</body>
</html>