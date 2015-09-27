<?php
if(isset($_GET['enviar'])){
	if(empty($_POST['correo'])){
		echo"Debes de capturar un coreo";
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
	

	header('location:validame.php?correo=$correo&genero=genero&carreras=carreras&deporte1=Soccer&deporte2=Ruby&deporte3=Tenis');
	exit;

	
}else{
	header('location:ejemplo.php?');
}







?>