<?php 
    session_start();
	$correo=$_SESSION['correo'];
	$genero=$_SESSION['genero'];
	$carrera=$_SESSION['carrera'];
	$deporte1=$_SESSION['d1'];
	$deporte2=$_SESSION['d2'];
	$deporte3=$_SESSION['d3'];
	echo "$correo<br>$genero<br>$carrera<br>$deporte1<br>$deporte2<br>$deporte3<br>";

 ?>