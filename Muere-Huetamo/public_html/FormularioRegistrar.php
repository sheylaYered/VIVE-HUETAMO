<!DOCTYPE html>

<html>
    <head>
        <title>Registrar Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


      <link rel="stylesheet" type="text/css" href="css/estilosregistrar.css">
         
    </head>
    <body >
   <?php
include('menu.php');
?>  

<fieldset>
<legend>SIGN IN</legend>
    
        
        <form method="POST" action="RegistroUsiario.php"> 
            
            
            <h3 style="font-family: lucida calligraphy"><center>Registro De Usuarios</center></h3>
            <br>

            <p size="30">Nombre: <input type="text"  id="nombre" name="nombre" size="30" style="margin-left: 10px;"></p> 
            
            <p>Password: <input type="password"  id="password" name="contrasena" size="20" maxlength="50" style="margin-left: 1px;"></p>
            
            <p>Verificar Password: <input type="password" name="pass" size="20" maxlength="50" style="margin-left: 1px;"></p>
            
            <p>Nick: <input type="text" name="nick" size="20" style="margin-left: 31px;">
                     
            <p>Direccion: <input type="text" name="direccion" size="20" maxlength="60"></p>
            
            <p>Telefono: <input type="text" name="telefono" size="20" maxlength="10" style="margin-left: 3px;"></p>
            
            <p>Sexo: <select name="sexo" style="margin-left: 25px;">
                     <option value="M" selected="selected">Masculino</option>
                     <option value="F">Femenino</option></select></p>
                     
            <p>E-mail: <input type="text" name="email" size="20" maxlength="60" style="margin-left: 18px;"></p>
      
            <p><input type="submit" value="Guardar datos" name="B1" style="float: left; margin-left: 60px;"></p> 
            
      
        </form>  
    </fieldset>
    </body>
</html>
