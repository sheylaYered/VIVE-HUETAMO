<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inicio de Sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
        	<label>Usuario</label>

        	<input type="text" id="user" placeholder="Usuario"/>
        	<label>Contraseña</label>
        	<input type="password" id="pass" placeholder="Contraseña">

        	<button>Iniciar Sesion</button>

<?php
session_start();

if(isset($_GET['sesion'])){

    $sesion=$_GET['sesion'];

    if($sesion==1)
        session_destroy();
    
}





if(isset($_POST['usuario'])&& isset($_POST['pass'])){
    $nick=$_POST['usuario'];
    $pass=$_POST['pass'];
$conexion=mysqli_connect("localhost","root","amsc","vivehuetamo")

$res=mysql_query($conexion,"select *from usuarios where nick='$nick' and password='$pass'");

if($lector=mysqli_fetch_array($res)){
    $_SESSION['inicio']='OK';

    header("Location: consultar.php");
}
}
?>





        </form>
    </body>
</html>
