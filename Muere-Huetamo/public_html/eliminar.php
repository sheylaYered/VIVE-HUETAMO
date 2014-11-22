



	
<?php 


$id = $_POST['NICK']; 

include('abre_conexion.php');   

$query = "delete from $tabla_db1 where NICK = '$id'";  
$result = mysql_query($query);  

include('cierra_conexion.php');   




?> 
