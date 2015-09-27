<?php
session_start();

$nombre1="";
$correo1="";
$direccion1="";
$cp1="";
$radio21="";
$tablet1="";
$celular1="";
$laptop1="";
$mp31="";
$cosas1="";


			if(isset($_SESSION['ID'])){
			$nombre1=$_SESSION['nombre1'];
			$correo1=$_SESSION['correo1'];
			$direccion1=$_SESSION['direccion1'];
			$cp1=$_SESSION['cp1'];
			$radio21=$_SESSION['radio21'];
			$tablet1=$_SESSION['tablet1'];
			$celular1=$_SESSION['celular1'];
			$laptop1=$_SESSION['laptop1'];
			$mp31=$_SESSION['mp31'];
			$cosas1=$_SESSION['cosas1'];
			
	
	
	

}else{
	header('location:formulario1.php');
	
	
}
//Crear una tbala en html y imprimirlos

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body >
<p>FORMULARIO IMPRESO 12050447</p>
<p>&nbsp;</p>
<table width="1066" height="80" border="3" cellspacing="1">
  <tr>
    <td width="216" height="29" bgcolor="#0066FF" bordercolor="#000000">Nombre:
    <?php echo $nombre1; ?>
    </td>
    <p>
    
    <td width="222" bgcolor="#9966CC" bordercolor="#000000" >Correo:
    <?php  echo $correo1; ?>
    
    </td>
    <td width="114" bgcolor="#CC6666" bordercolor="#000000">Direccion:
    <?php echo $direccion1;?>
   
    </td>
    <td width="84" bgcolor="#6699FF" bordercolor="#000000">Cp:
    <?php echo $cp1;?></td>
    <td width="128" bgcolor="#33CC33" bordercolor="#000000">Opcion::
    <?php echo $radio21; ?>
    </td>
    <td width="61" bgcolor="#FFCC66" bordercolor="#000000">Cosas:
    <?php echo $tablet1; echo $celular1;
	echo $laptop1;
	echo $mp31;?>
    </td>
    <td width="199" bgcolor="#99FF99" bordercolor="000000">Transporte:<?php echo $cosas1;?></td>
    
    
    
  </tr>
  
</table>
</body>
</html>