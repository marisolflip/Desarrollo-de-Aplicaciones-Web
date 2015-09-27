<?php 
#el session_start es lo primero que debemos poner cuando se va a trabajar con sesiones
session_start();
if (isset($_POST['enviar'])) {
if (empty($_POST['correo'])) {
	# code...
	echo "Captura un correo";
	exit;
}
if (!isset($_POST['genero'])) {
	# code...
	echo "Selecciona un genero";
	exit;
}
if (empty($_POST['carrera'])) {
	# code...
	echo "Captura una carrera";
	exit;
}
$correo=$_POST['correo'];
$genero=$_POST['genero'];
$deporte1=$_POST['checkbox1'];
$deporte2=$_POST['checkbox2'];
$deporte3=$_POST['checkbox3'];
$carrera=$_POST['carrera'];


include("conexion/config.php");

mysqli_query($conexion,"insert into datos values('','$correo','$genero','$deporte1',
                                                '$deporte2','$deporte3','$carrera')");
mysqli_close($conexion);

$_SESSION['correo'] = $correo;
$_SESSION['genero'] = $genero;
$_SESSION['carrera'] = $carrera;
$_SESSION['d1'] = $deporte1;
$_SESSION['d2'] = $deporte2;
$_SESSION['d3'] = $deporte3;



header("location:otrapagina.php");
exit;
}else{
		header("location:ejercicio.php");
	}

 ?>