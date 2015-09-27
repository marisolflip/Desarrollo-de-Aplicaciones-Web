<?php
	session_start();
	




  if(isset($_POST['enviar'])){
	if(empty($_POST['correo'])){
		echo"Debes de capturar un correo";
		exit;
	}
	if(!isset($_POST['genero'])){
		echo "Captura un genero";
		exit;
	}
	if(!empty($_POST['carreras'])){
	echo "Captura una carrera";
	exit;	
		
	}
	
	$correo=$_POST['correo'];
	$genero=$_POST['genero'];
	$carrera=$_POST['carreras'];
	$deporte1=$_POST['Soccer'];
	$deporte2=$_POST['Ruby'];
	$deporte3=$_POST['Tenis'];
	
	//echo "$correo , $genero, $carrera, $deporte1 , $deporte2 $deporte3";
	
	$_SESSION['correo']=$correo;
	$_SESSION['genero']=$genero;
	$_SESSION['carreras']=$carrera;
	$_SESSION['Soccer']=$deporte1;
	$_SESSION['Ruby']=$deporte2;
	$_SESSION['Tenis']=$deporte3;
	
	header('location:validame.php');
	exit;

	
}else{
	header('location:ejemplo.php?');
}







?>