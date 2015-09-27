<?php
if(isset($_GET['enviar'])){
	
	if(!empty ($_GET['ciudad'])){
		$ciudad=$_GET['ciudad'];
		echo "Seleccionaste la ciudad de $ciudad";
	
}else{
		echo "Falta seleccionar una ciudad";
}
}else{
		header('location:select.php');
}
//select uso de de empty de preferencia usar este tipo de validadcion
//validar checkbox y radios uso de isset 
//par texto usar ambos






?>