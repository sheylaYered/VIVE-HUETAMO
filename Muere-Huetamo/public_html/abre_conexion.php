<?php 

$servidor = "localhost";
$usuario = "root";
$password = "juan";
$baseDeDatos = "huetamo";
$tabla_db1 = "usuario";    
$conexion_db = mysql_connect("$servidor","$usuario","$password") 
or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
$db = mysql_select_db("$baseDeDatos", $conexion_db) 
  
or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 