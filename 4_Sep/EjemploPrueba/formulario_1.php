<?php
//Se guarda en una variable el mensaje de get.

$error=$_GET['error'];
//Se manada a a imprimir la variable 
 echo "$error";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario de Pruebas</title>
</head>

<body>
<h1><p> Formulario 1 </p></h1>
<!-- Titulo de el formulario con el tamaño h1 que contienen en un parrafo-->

<form id="form1" name="form1" method="get" action="validaciontexto.php">
<!-- Llamo  por el metodo de get para que se imprima en la barra y en el action mandar a llamar el archivo .php -->

<input type="text" id="usuario" name="Usuario" placeholder="Usuario"  />
<!-- Una caja de tipo texto que se llama usuario y con el place holder es para que aparezca en el cuadro de texto -->
<input type="password" name="Password" />
<!-- Un cuadro de tipo contraseña -->
<input type="submit" name="Enviar"  />
<!--Un boton de tipo submit con el nombre de enviar -->

</form>
<!-- Se cierra la forma -->



</body>
</html>