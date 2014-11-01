<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Vive Huetamo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/EstiloPP.css">
        <link rel="stylesheet" href="Estilos/Estilo1.css"> 
         <link rel="stylesheet" href="Estilos/Estilo1.css"> 
    </head>
    <body background="imagenesfondo/azul.jpg">     
        <?php
        require("conexion.php");
        base::conectar();
         ?>
      
        <header class="titulo "  >
            Vive Huetamo!
            <div>
            <nav>
                <ul class="menuprincipal">
                    <li class=c>Inicio</li>
                    
                    <a href="Historia.html"><li class="c">Historia</li></a>
                    <a href="Galeria.html"><li class="c">Galeria</li></a>
                    <a href="Gastronomia.html"><li class="c">Gastronomia</li></a> 
                    <a href="Tradiciones.html"><li class="c">Tradiciones</li></a>
                </ul>
            </nav>
        </div>
        </header>
        <section id="personajesdestacados">
                       <form >
                    
<fieldset>
<legend><strong>Personajes</strong></legend>


<p>Fanny Cano (1944-1983), actriz y productora</p>
<p>Amalia Mendoza García (1923-2001), cantante.</p>
<p>José Guadalupe Cruz "el profe cruz". Ex jugador profesional y técnico de la primera división mexicana de fútbol.</p>
<p>Martín Urieta Solano Cantante.</p>

</fieldset>
                    </form>
            
            
            
        </section>
        
        <section >
            <div id="galeria">
                <div id="galeria_base">
                    <img src="galeria1/1.jpg" id="imagen1">
                   
                    
                </div>
                
                <div id="galeria_miniaturas">
                    <img class="miniatura" src="ip/1.jpg"   onclick="document.getElementById('imagen1').src='galeria1/1.jpg';">
                     <img class="miniatura" src="ip/2.jpg" onclick="document.getElementById('imagen1').src='galeria1/2.jpg';">
                      <img class="miniatura" src="ip/3.jpg"   onclick="document.getElementById('imagen1').src='galeria1/3.jpg';">
                       <img class="miniatura" src="ip/4.jpg"   onclick="document.getElementById('imagen1').src='galeria1/4.jpg';">
                        <img class="miniatura" src="ip/5.jpg"   onclick="document.getElementById('imagen1').src='galeria1/5.jpg';">
                    
                </div>
                
                
            </div>
           
        </section>
        
        <aside id="inicioSesion">
            <div >
                <form method="POST">
                    
                    <br/>
                    
<fieldset>
<legend><strong>Iniciar Sesion</strong></legend>
<br/>
<p>
<label>Usuario:</label>
<input type="text" id="nombre" name="user" placeholder="Usuario">
</p>
<br/>
<p>
<label>Contraseña:</label>
<input type="password" id="nombre" name="pass" placeholder="Password">
</p>
<br/>
<br/>
<input type="submit" id="boton" value="Ingresar"/>

<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
    $consulta = mysqli_query(base::$conexion,"select usuario, pass from login where usuario='".$_POST["user"]."' and pass=PASSWORD('".$_POST["pass"]."')");
     if ($datos = mysqli_fetch_array($consulta)){
    session_start();
    $_SESSION["aut"]=$_POST["user"];
    echo  
    '<br>Bienvenido: '.$_SESSION["aut"];
        header("Location: panel_usuario.php");
    }else{
        echo '<br>usuario o contrase&ntilde;a incorrecta';
    }
}
?>


<label for="Registro" id="link" class="c">Registrarse</label>
<br/>
</fieldset>
                    <br/>
<br/>
<br/>
<br/>
                    </form>
            </div>
          
                
           
        </aside>
        <footer>
            
             
             <p >Visitanos en Nuestras Redes Sociales<</p>
             <div>
                 <center>
                     <img src="redes/facebook.png" width="80"height="80">
                     <img src="redes/twiter.png"width="80"height="80">
                     <img src="redes/men.png"width="80"height="80">
                 </center>
             </div>
                 
                
             
        </footer>
       
            <br/>
            <!--
            <div>
                <p  class="subtitulo">Principales Atracciones</p>
                
                <p class="atracciones">Inglesia de San Juan Bautista</p>
                <Center><img src="huetamo.jpg"></Center>
                
            </div>-->
       
    </body>
</html>
