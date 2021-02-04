<?php 
$url = $_SERVER;
$explode_index =  explode('index.php' , $_SERVER['PHP_SELF']); 
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $explode_index[0];
echo '<pre>'; print_r($base_url); '</pre>'; die;
echo '<pre>'; print_r($url); '</pre>'; die;



?>