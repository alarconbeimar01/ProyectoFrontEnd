<?php
$enlaceDb ="localhost";
$nombreDb = "nombre";
$usuarioDb = "usuario";
$contrasenaDb = "contrasena";
$verUsuario="CALL INFOUSUARIO";
$conexion = mysqli_connect($enlaceDb,$usuarioDb,$contrasenaDb,$nombreDb) or die("Error al conectar");



mysqli_set_charset($conexion, "utf8");



?>
