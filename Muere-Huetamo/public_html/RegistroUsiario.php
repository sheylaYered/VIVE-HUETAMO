<html>  

<head>  
<title>Guardar Datos</title> 


         <link rel="stylesheet" type="text/css" href="css/demo.css" />
         <link rel="stylesheet" type="text/css" href="css/style3.css" />
         <link rel="stylesheet" href="css/Estilo1.css"> 
         <script type="text/javascript" src="js/calculos.js"> </script>
         <link rel="stylesheet" href="css/estiloprincipal.css"> 

 
</head>  

<body>
<?php
include('menu.php');
?>	  
<?php  


$nombre = $_POST["nombre"];  
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$nick = $_POST["nick"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$pass = $_POST["pass"];
 
include("abre_conexion.php");

$nuevo_usuario=mysql_query("select nick from $tabla_db1 where nick='$nick'"); 
if(mysql_num_rows($nuevo_usuario)>0) 
{ 
?> 
<script language="javascript"> 
alert("El nick del usuario ya a sido registrado previamente.");
window.location="FormularioRegistrar.html";
</script> 
<?php 
} 
else 
{ 

    
    
$nuevo_email=mysql_query("select correo from $tabla_db1 where correo='$email'"); 
if(mysql_num_rows($nuevo_email)>0) 
{ 
?> 
<script language="javascript"> 
alert("El E-mail ya a sido registrado anteriormente.");
window.location="FormularioRegistrar.html";
</script> 
<?php 
} 
else 
{
    if($contrasena != $pass) 
{ 
?> 
<script language="javascript"> 
alert("la contraseña no coincide.");
window.location="FormularioRegistrar.html";
</script> 
<?php 
} else{
    
    

    $_GRABAR_SQL = "INSERT INTO $tabla_db1 (contrasena,nick,direccion,nombre,telefono,sexo,correo) VALUES ('$contrasena','$nick','$direccion','$nombre','$telefono','$sexo','$email')";  
mysql_query($_GRABAR_SQL); 

?> 
<script language="javascript"> 
alert("El usuario se a registrado correctamente.");
window.location="Index.php";
</script> 
<?php 


include("cierra_conexion.php");
    
}  

}

}
 
?>  
</body>  

</html> 