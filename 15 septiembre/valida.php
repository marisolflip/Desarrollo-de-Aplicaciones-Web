<?php

//Validar con java script o html5 ,php, o java script en el nombre 
//Nombre correo electronico y numeros que se validen  codigo postal de 5 caracteres
//el nombre no debe de tener menos de 3 caracteres

//Condiciones

//nombre letras tamaño menor que 3 y que este lleno



//Correo que acepte el arroba y que lo valida
//codigo postal deben de ser numeros y no menos de 4 ni mas de 6
//radio si o no
//Select que seleccione uno de los medios de transporte 


//mandarlos por una variable de impresion se meten en una tabla y se muestran en las otras paginas 


//Se valida el boton
if(isset($_POST['enviar'])){
//Se reciben las variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$codigop=$_POST['cp']; 
$radio=$POST['radio2'];
$select=$POST['cosas'];

//Agregar los elementos del checkbox
//Se hacen las validaciones.




$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['correo']=$_POST['correo'];
$_SESSION['direccion']=$_POST['direccion'];
$_SESSION['cp']=$_POST['cp'];
$_SESSION['radio2']=$_POST['radio2'];
$_SESSION['cosas']=$_POST['cosas'];

include("../conexion/config.php");


$_SESSION['ID']='Valido';
header('location:validacion.php');
exit;

}else{
	//Se le da la locacion si no se presiona que se manda a la otra página
header('location:index.html');	
	
}








?>