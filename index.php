<?php  
/**
 * Estas lineas se encargan de generara la dirección de la base_url
 */
$explode_index =  explode('index.php' , $_SERVER['PHP_SELF']); 
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $explode_index[0]; 



?>