<?php

if(isset($_GET['button'])){
	
	//Valido el primer elemento.
	if(isset($_GET['comida1'])){
		$pizza=$_GET['comida1'];
	}else{
		$pizza='No le gusta la comida 1';
	}
	
	//Valido el segundo elemento.
	if(isset($_GET['comida2'])){
		$pizza=$_GET['comida2'];
	}else{
		$pizza='No le gusta la comida 2';
	}
	
	
	//Valido el tercer elemento
	
	if(isset($_GET['comida3'])){
		$pizza=$_GET['comida3'];
	}else{
		$pizza='No le gusta la comida 3';
	}
	
	echo "$comida1 <br> $comida2 <br> $comida3";

	
	
	
	
$_GET['comida1'];
$d=$_GET['comida2'];
$e=$_GET['comida3'];
echo $_GET['comida1'];
echo $d;
echo $e;

}else
{
	header('location:ejrplo.php'); 
exit;

}





?>