<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<!--Se usara el metodo de post aqui y cambiar todos los get en el validacion del php  solo se cambian los primeros get los 
la segunda validaciojn no se cambia sacarle copia darle mas diseño a este frmulario -->


<form id="form1" name="form1" method="post" action="validaejemplo.php">
  <p>
    <label for="textfield"></label>
    Correo:
    <label for="textfield2"></label>
    <input type="email" name="correo" id="textfield2" />
  </p>
  <p>Masculino:
    <input type="radio" name="MASCULINO" id="genero" value="radio" />
    <label for="radio"></label>
  Femenino:
  <input type="radio" name="FEMENINO" id="genero" value="radio2" />
  <label for="radio2"></label>
  </p>
  <p>Deportes:</p>
  <p>
    <input type="checkbox" name="Soccer" id="checkbox" value="SOCCER" />
    <label for="checkbox"></label>
  Soccer
  <input type="checkbox" name="Ruby" id="checkbox2" value="RUBY" />
  <label for="checkbox2"></label>
  Ruby
  <input type="checkbox" name="Tenis" id="checkbox3" value="TENIS" />
  <label for="checkbox3"></label>
  Tenis</p>
  <p>
    <label for="select"></label>
    <select name="carreras" id="select">
    <option value="SISTEMAS">SISTEMAS</option>
    <option value="INFORMATICA">INFORMATICA</option>
    <option value="ELECTRONICA">ELECTRONICA</option>
    <option value="INDUSTRIAL">INDUSTRIAL</option>
    <option value="MECANICA">MECANICA</option>
    </select>
    <input type="submit" name="enviar" id="button" value="Enviar" />
  
</form>
</body>
</html>