	<!DOCTYPE HTML>
	<html>

	<head>

		<title>ingresar</title>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- for-mobile-apps -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
		<!-- //for-mobile-apps -->
		<!--Google Fonts-->
		<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
		<!--google fonts-->
	</head>

	<body>

		<h2 align="center">REGISTRO DE USUARIOS</h2>

    <p>
      
   
    <div align="center">
      <form action="Validador/registrarUsuarioV.php" method="post" class="login-main">
<table width="auto%" border="0">
  <tr>
    <th scope="row">Usuario:</th>
    <td><input name="usuario"  type="text" required   ></td>
  </tr>
  <tr>
    <th scope="row">Contraseña:</th>
    <td><input type="password" name="password" required>
  </tr>
  <tr>
    <th scope="row">Telefono:</th>
    <td><input type="number" name="telefono" required></td>
  </tr>
  <tr>
    <th scope="row">E-mail:</th>
    <td><input type="email" name="email" required></td>
  </tr>
</table>

			  <input type="submit" name="Submit" value="REGISTRAR" align="center" />
		 
       </form>
        <?php

if (isset($_REQUEST['Mensaje']))
{

$mensaje = $_REQUEST['Mensaje'];


if($mensaje==1){
	
	echo " Usuario Registrado Exitosamente <br> espera activacion por parte del administrador. ";
	}
elseif($mensaje==2){
	echo "Error al registrar el usuario <br> Nombre de usuario ya existe";
}
}
 echo '<a href="index.php"><h2>Regresar</h2></a>';

?>
        
	</div>
    
   
	
	</body>

	</html>