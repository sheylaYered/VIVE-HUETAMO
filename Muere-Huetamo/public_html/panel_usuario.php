<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        require("conexion.php");
         ?>
        <title>Vive Huetamo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div> *Vive Huetamo* </div>
        <?php
        session_start();
        if(isset($_SESSION["aut"])){
            echo 'Bienvenido: '.$_SESSION["aut"];
            echo '<form action="logout.php" method="post">
            <input type="submit" value="Cerrar secion"/>
        </form>';
        }else{
            //echo 'no iniciaste secion';
            header("Location: index.php");
        }
        ?>
        
        
        
        
        <header class="titulo">
            Vive Huetamo!
            <div>
            <nav>
                <ul class="menuprincipal">
                    <li class=c>Inicio</li>
                    <li class="c">Directorio</li>
                    <li class="c">Historia</li>
                    <li class="c">Galeria</li>
                    <li class="c">Contacto</li>
                    
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
          <img src="1.jpg" id="imagen1">
   </div>
   <div id="galeria_miniaturas">
    <img class="miniatura" src="ip/1.jpg"   onclick="document.getElementById('imagen1').src='1.jpg';">
     <img class="miniatura" src="ip/2.jpg" onclick="document.getElementById('imagen1').src='2.jpg';">
      <img class="miniatura" src="ip/3.jpg"   onclick="document.getElementById('imagen1').src='3.jpg';">
       <img class="miniatura" src="ip/4.jpg"   onclick="document.getElementById('imagen1').src='4.jpg';">
        <img class="miniatura" src="ip/5.jpg"   onclick="document.getElementById('imagen1').src='5.jpg';">
  </div>
     
     </div>
        
  </section>  
       
    </body>
</html>
