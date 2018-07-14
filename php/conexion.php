<?php 
$con = new  mysqli('localhost','root','','gdlwebcamp');
if($con->connect_error){
     die('Error de conexión: ' . $con->connect_error);
}
?>