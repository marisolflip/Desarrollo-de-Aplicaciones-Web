<?php
if(isset($_GET['enviar'])){
	$carrera=$_GET['carrera'];
	if(isset($carrera)){
		echo "Seleccionaste la carrera de $carrera";
		
	}else{
		echo "Falta caputar una carrera";
		exit;
		header("location:radio.php");
	
	
	}



}






?>