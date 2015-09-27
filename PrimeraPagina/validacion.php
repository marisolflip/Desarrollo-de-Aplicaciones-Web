<?php
$var= 'Algo';
echo '0 como cadena<br>';
if(isset($var)){
	echo "isset :SI establecido <br>";
}else{
	echo "isset: No establecido <br>";
}
if (empty($var)){
	echo "empty esta vacio <br>";
}else{
	echo " empty  no esta vacio <br>";
}
if (is_null ($var)){
	echo "is_null es Nulo <br>";
}else{
	echo "is_null no es Nulo <br>";
}
	

//echo ;
//if (isset


// no esta establecido y esta vacio
//Declarada un varibale sin asignacion se convierte automaticamente en una null 



//if(isset($var)){
?>