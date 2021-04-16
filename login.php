<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username y $password
$username=$_POST['username'];
$password=crypt($_POST['password'],'Beimar');
// Estableciendo la conexion a la base de datos
include("Modelo/conectaDb.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de 

$sql = "SELECT nombreUsuario, contrasenaUsuario FROM Usuarios WHERE nombreUsuario = '" . $username . "' and contrasenaUsuario='".$password."' AND estadoUsuario = 1";
$query=mysqli_query($conexion,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Iniciando la sesion
		header("location: profile.php"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El Usuario o la contraseña es inválida.";	
}
}
}
?>