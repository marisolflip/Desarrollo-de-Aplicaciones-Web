<?php
if ( !empty($_GET["como"]) && is_array($_GET["como"]) ) { 
    echo "<ul>";
    foreach ( $_GET["como"] as $como ) { 
            echo "<li>";
            echo $como; 
            echo "</li>"; 
     }
     echo "</ul>";
}


?>

