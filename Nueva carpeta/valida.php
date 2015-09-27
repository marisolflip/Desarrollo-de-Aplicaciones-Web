<?php
session_start();
if(isset($_POST['enviar'])){ //1era
	
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$cp=$_POST['cp'];
	$radio2=$_POST['radio2'];
	
	
	

//Validacion del Nombre
	if(!empty($nombre)){ //2da
	  //Que no esté vacio **
	  //No tenga el tamaño menor de 3
	  //Solo sean letras
	
	  $correcto=true;
				$permitidos = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZÑ"; 
     					 for ($i=0; $i<strlen($nombre); $i++) { 
     						 if (strpos($permitidos, substr($nombre,$i,1))===false) { 
							
         						echo $nombre . " no es válido<br>"; 
         						$correcto=false; 
								exit;
							 }
	    					 } //ckey for 
						}//ckey if tamaño
  				
				
				//Validacion del Correo
	if(empty($correo)){
	  //Correo **
	  echo"Debes de capturar un correo";
		exit;
	  
	}
//Validacion de la direccion
		if(empty($direccion)){
	  
			echo "Falta caputar una direccion";
			exit;
		}
		
//Validacion de el codigo Postal

		if(!empty($cp)){
			// echo "$cp";
		 //Solo numeros 
		 //tamaño 5 **
		 $correcto1=true;
		  $permitidos = "0123456789"; 
     		 for ($i=0; $i<strlen($cp); $i++){ 
     	 			if (strpos($permitidos, substr($cp,$i,1))===false){ 
        	 			echo $cp . " no es válido<br>"; 
         				$correcto1=false; 
      					exit;
					}}//for
   				}//if
		
//Validacion del valor SI o NO
		if(!isset($radio2)){
	
			 echo "Falto elegir Si o No ";
		 	exit;
		}
		
		if(isset($cosas)){
	
			 echo "Falto transporte";
		 	exit;
		}
		
					
	
				
				
				
				
$_SESSION['nombre1']=$_POST['nombre'];
$_SESSION['correo1']=$_POST['correo'];
$_SESSION['direccion1']=$_POST['direccion'];
$_SESSION['cp1']=$_POST['cp'];
$_SESSION['radio21']=$_POST['radio2'];
$_SESSION['cosas1']=$_POST['cosas'];
$_SESSION['tablet1']=$_POST['tablet'];
$_SESSION['celular1']=$_POST['celular'];
$_SESSION['laptop1']=$_POST['laptop'];
$_SESSION['mp31']=$_POST['mp3'];

	
$_SESSION['ID']='Valido';
header('location:imprimir.php');
exit;

	
//echo $nombre, $correo,$direccion,$cp,$radio2 ;


}else{
	echo "pagina2";
	exit;
 header('location:formulario1.php');
}


?>