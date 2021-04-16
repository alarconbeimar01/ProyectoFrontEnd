<?php
// Estableciendo la conexion a la base de datos
//include("Modelo/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("Modelo/conectaDb.php");//Contiene de conexion a la base de datos
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($conexion, "select idUsuario,nombreUsuario,privilegiosUsuario, estadoUsuario from Usuarios where nombreUsuario='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['nombreUsuario'];
$login_sessions =$row['idUsuario'];
$login_sessionPrivilegios =$row['privilegiosUsuario'];

if(!isset($login_session)){
mysqli_close($conexion); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}
?>