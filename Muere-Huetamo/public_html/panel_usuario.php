<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        require_once'conexion.php';
         ?>
        <title>Vive Huetamo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="css/estiloprincipal.css"> 
                     <link rel="stylesheet" href="css/Estilo1.css"> 
    </head>
    <body>
        
        
        <header class="titulo">
            Vive Huetamo
            <div>
            <nav>
                <ul class="menuprincipal">
                    <li class=c>Inicio</li>
                    <li class="c">Directorio</li>
                    <li class="c">Historia</li>
                    <li class="c">Galeria</li>
                    <li class="c">Contacto</li>
                    <li class="c">Eliminar</li>
                    
                </ul>
            </nav>
        </div>
        </header>
        
  
       
  
        
  
      <!--  
  <div> *Vive Huetamo* </div>
        <?php
        session_start();
        if(isset($_SESSION["aut"])){
            echo "'Bienvenido: ".$_SESSION["aut"];
            echo "'<form action="logout.php" method="post">
            <input type="submit" value="Cerrar secion"/>
        </form>";
        }else{
           
            header("Location: index.php");
        }
        ?>
        -->
    </body>
</html>
