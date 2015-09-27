<?php

$sistema=$_GET["so"];
if(isset($_GET['enviar'])){
echo $sistema;

}else

header('location:botdos.php');
exit;




?>