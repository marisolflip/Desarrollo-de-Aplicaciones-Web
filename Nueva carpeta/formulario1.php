<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<head>
	<title>Pagina1</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="valida.php">
  <p>Formulario 12050447 Gpe Marisol Calvillo</p>
  <p>&nbsp;</p>
  <p>Nombre:

    <input type="text" name="nombre" id="textfield" minlength="3" min="3" required="required"/>
  </p>
  <p>
  
    Correo:
    <input type="email" name="correo" id="textfield2" required />
  </p>
  <p>
    
    Direccion:
    <input type="text" name="direccion" id="textfield3"  />
  </p>
  <p>
    Codigo Postal:
    <input type="text"name="cp"   id="textfield4" size="5" maxlength="5" minlength="5" />
  </p>
  <p>
  Opcion
  <!--Radio nombres iguales  y valores diferentes-->  </p>
  <p>
    <input type="radio" name="radio2" id="radio" value="Si" />
    <label for="radio"></label>
  Si</p>
  <p>
    <input type="radio" name="radio2" id="radio2" value="No" />
    <label for="radio2"></label>
  No</p>
  <p>&nbsp;</p>
   <p><!--Select debe de tener los valores diferentes y el nombre debe de ser el que se pondra para validarlo-->Tranporte:
     <select name="cosas" id="cosas">
     <option value="">Elige</option>
        <option value="Avion">Avion </option>
        <option value="Barco">Barco </option>
        <option value="Tren">Tren </option>
        <option value="Auto">Auto</option>
        
      </select>
  </p>
   <p>Cosas: </p>
   <p>
      <input type="checkbox" name="tablet" id="checkbox" value="tablet" />
    
   Tablet</p>
   <p>
  <label for="checkbox"></label>
     
     <input type="checkbox" name="celular" id="checkbox2" value="celular" />
     Celular</p>
   </p>
   <p>
     <label for="checkbox2"></label>
      <input type="checkbox" name="laptop" id="checkbox3"  value="laptop"/>
      Laptop    </p>
    <p>
      <label for="checkbox3"></label>
      <input type="checkbox" name="mp3" id="checkbox4"  value="mp3"/>
    MP3</p>
    <p>
      <input type="submit" name="enviar" id="enviar" value="Enviar" />
  
  </p>
</form>




</body>




</html>