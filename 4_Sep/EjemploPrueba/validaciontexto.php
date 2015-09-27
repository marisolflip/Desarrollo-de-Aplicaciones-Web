<?php //Se abre el php

if(isset($_GET['Enviar'])){  //se compara si se ha presionado el boton 'enviar' se compara
	
	if(empty($_GET['Usuario']) or  empty($_GET['Password'])){ //Se compara si estan usuario y contraseña escritos
	
	//validas los campos requeridos
		$error="Falta_capturar_el_usuario_y_la_clave";  //si no estan escritos se mostrara un mensaje de error 
		header("location:formulario_1.php?error=$error"); // Si no lo redirecciono hacia donde este la locacion y enligo en la siguiente linea 
		//? se lo pongo al lado de php
		//error esa variable la escribo es en donde viene el mensaje del error 
		//=$error mando a llamar la variable
		
		exit; //cierro 
	}else //en caso contrario 
	 { //Se abre el else
	$usuario= $_GET['Usuario']; //el valor de get lo guardo en una variable de usuario.
	$clave= $_GET['Password']; // el valor de la clave la guardo en una varible llamada clave .
	echo "$usuario $clave"; //una vez realizado esto los mando a imprimir por medio de un echo.
	} // se cierra el else
  }else // se cierra el primer else que esta en la parte de arriba que es en el que se compararn el usaurio y la contraseña.
  header ("location:formulario_1.php"); //mando a llamar por medio del header  la locacion en donde esta ubicado el formulario1.php
  exit; //cierro
 //Se ciera php
?> 
