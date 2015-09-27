<?php
$host_bd="localhost";
$usuario_bd="root";
$password_bd="";
$nombrebd="ejemplo";

$conexion= mysql_connect("$host_bd","$usuario_bd","$password_bd","$nombrebd");

if(!$conexion){
	die("No se puede conectar".mysqli_connect_error());
}



?>