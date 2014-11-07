<?php 


$hotsdb = "localhost";    
$basededatos = "vivehuetamo";   

$usuariodb = "root";    
$clavedb = "root";    

$tabla_db1 = "usuario";    
  



$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 