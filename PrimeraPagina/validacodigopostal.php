<?php

if(isset($_POST['enviar'])){
$cp=$_POST['cp'];
$nomb=$_POST['letras'];


	if(isset($_POST['cp'])){
	$correcto=true;
	 $permitidos = "1234567890"; 
      for ($i=0; $i<strlen($cp); $i++){ 
      if (strpos($permitidos, substr($cp,$i,1))===false){ 
         echo $cp . " no es válido<br>"; 
         $correcto=false; 
		 exit;
      
   }
	
	  }}}





?>