<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="validar_ejercicio.php" method="post" name="form1" id="form1">
		 <p>
		Correo 
		<input type="text" id="correo" name="correo" placeholder="correo">
		</p>
		<p>
		Masculino
		<input type="radio" id="radio1" name="genero" value="Masculino">
		Femenino

		<input type="radio" id="radio2" name="genero" value="Femenino">
		</p>
		 <p>
		<input type="checkbox" id="checkbox1" name="checkbox1" value="Futbol" >
		<label for="checkbox1">Futbol</label>
		<input type="checkbox" id="checkbox2" name="checkbox2" value="Baloncesto">
		<label for="checkbox2">Baloncesto</label>
		<input type="checkbox" id="checkbox3" name="checkbox3" value="Natacion">
		<label for="checkbox3">Natacion</label>
	    </p>
		<p>
		<select name="carrera" id="select">
			<option value=""  selected="selected">Selecciona una carrera</option>
			<option value="Sis.">Sistemas</option>
			<option value="Meca.">Mecatronica</option>
			<option value="Info.">Informatica</option>
			<option value="Mate.">Materiales</option>
		</select>
		</p>
		<p>
		<input type="submit" id="button" name="enviar" value="Enviar">
		</p>

	</form>
</body>
</html>