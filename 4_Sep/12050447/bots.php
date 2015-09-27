<?php

$comida=$_GET["com"];
if(isset($_GET['enviar'])){
for($i=0; $i<count($comida);$i++)
{
	echo $comida[$i];
}
}else

header('location:bots.php');
exit;










?>