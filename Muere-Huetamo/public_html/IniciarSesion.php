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
<link rel="stylesheet" type="text/css" href="css/EstiloInicio.css">



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
        <form method="POST" action="logininicio.php">
        	<label>Usuario</label>

        	<input type="text" id="name" placeholder="Usuario"/>
        	<label>Contraseña</label>
        	<input type="password" id="pass" placeholder="Contraseña">

                <button id="boton">Iniciar Sesion</button>
<!--
<br/>
<br/>
<input type="submit" id="boton" value="Ingresar"/>


-->
<label for="Registro" id="link" class="c">Registrarse</label>
<br/>
</fieldset>





        </form>
    </body>
</html>
