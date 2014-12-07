<html>  

<head>  
<title>Guardar Datos</title> 


         

 
</head>  

<body>
	  
<?php  



$email = $_POST["email"];
 
include("abre_conexion.php");

$query = "delete from $tabla_db1 where correo = $email";  
$result = mysql_query($query);   
?> 
<script language="javascript"> 
alert("El Usuario Fue Eliminado.");
//window.location="FormularioRegistrar.html";
</script> 
<?php 





include("cierra_conexion.php");
 
?>  
</body>  

</html> 