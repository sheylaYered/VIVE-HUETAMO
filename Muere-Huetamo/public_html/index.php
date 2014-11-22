
<html>
    <head>
        <title>Vive Huetamo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Sliding Image Panels with CSS3" />
        <meta name="keywords" content="sliding, background-image, css3, panel, images, slider" />
        <meta name="author" content="Codrops" />

 
         <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
         <link rel="stylesheet" href="css/Estilo1.css"> 
         <script type="text/javascript" src="js/calculos.js"> </script>
         <link rel="stylesheet" href="css/estiloprincipal.css"> 
         
    </head>
    <body >  
    <?php
include('menu.php');
?>	   
        <div>
      
            
                
         
            
           
     
        <section>
            <div class="container">

		 

            <div class="codrops-top">

                

              

              <div class="clr">
</div>

            </div>

		
                        <section  class="cr-container">

<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>

<label for="select-img-1" class="cr-label-img-1">1</label>
<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />

<label for="select-img-2" class="cr-label-img-2">2</label>

<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
<label for="select-img-3" class="cr-label-img-3">3</label>
<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />

<label for="select-img-4" class="cr-label-img-4">4</label>
<div class="clr"></div>
<div class="cr-bgimg">
    <div>
<span>Slice 1 - Image 1</span>
<span>Slice 1 - Image 2</span>
<span>Slice 1 - Image 3</span>

<span>Slice 1 - Image 4</span>
</div>
<div>
						
<span>Slice 2 - Image 1</span>
<span>Slice 2 - Image 2</span>

<span>Slice 2 - Image 3</span>
<span>Slice 2 - Image 4</span>
</div>
<div>
<span>Slice 3 - Image 1</span>
<span>Slice 3 - Image 2</span>
<span>Slice 3 - Image 3</span>
<span>Slice 3 - Image 4</span>
</div>
<div>
<span>Slice 4 - Image 1</span>
<span>Slice 4 - Image 2</span>

<span>Slice 4 - Image 3</span>

<span>Slice 4 - Image 4</span>
</div>
</div>
<div class="cr-titles">
<h3><span>Historia</span><span>conoce la historia de Huetamo</span></h3>
<h3><span>Galeria</span><span>Conoce la ciudad de Huetamo</span></h3>
<h3><span>Tradiciones</span><span>Conoce la cultura de Huetamo</span></h3>
<h3><span>gastronomia</span><span>Conoce los platillos de Huetamo</span></h3>
</div>
</section>
</div> 
    
            
      
            <div id="personajesdestacados">
                      
                    
                           <fieldset>
<legend><strong>Personajes</strong></legend>


<p>Fanny Cano (1944-1983), actriz y productora</p>
<p>Amalia Mendoza García (1923-2001), cantante.</p>
<p>José Guadalupe Cruz "el profe cruz". Ex jugador profesional y técnico de la primera división mexicana de fútbol.</p>
<p>Martín Urieta Solano Cantante.</p>
<p>Balde el rellenero mas famoso.</p>
<p> jose avila camacho: Escritor celebre.</p>

</fieldset>
                               </div>
            
        
        
           
            
        </div>
        
      
            
<!--        <section class="galeriatodo">
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
        -->
        
       
   
  
        <div id="inicioSesion">
        
            <marquee id="Galeria" direction="up">

             <center>Noticias</center> 
             
             <?php 

require_once 'ConNo.php';
$con = new consultar();
$con->consultarUsuarios();
 ?>

             
</marquee>
        
<a href="javascript:void(0);" onclick="getElementById('ejemplo').direction='down';">

</a>
<a href="javascript:void(0);" onclick="getElementById('ejemplo').direction='up';">

</a>
        
        </div>
        <br/>
        <br/>
        
        <footer>
           <br/>
           <br/>
           <br/>
            <br/>
           <br/>
           <br/>
           <center><p id="redes">Visitanos en Nuestras Redes Sociales</p></center>
             <br/>
           
           
             <div>
                 <center>
                     <img src="redes/facebook.png" width="50" height="50">
                     <img src="redes/twiter.png" width="50" height="50">
                     <img src="redes/men.png" width="50" height="50">
                 </center>
             </div>
                 
        
             
        </footer>
       
         
      
       
    </body>
</html>
