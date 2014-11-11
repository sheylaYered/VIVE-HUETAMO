
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
        require("conexion.php");
        base::conectar();
         ?>
      
           
        <header class="titulo">
            Vive Huetamo!  
           
            <div class="pollo">
            <nav>
                
                <ul class="menuprincipal">
                    <li class=c>Inicio</li>
                    <li class="c">Directorio</li>
                   <a href="Historia.html"><li class="c">Historia</li></a>
                     <li class="c"><a href="Galeria_Imagenes/Paginas/GaleriaVH.php">Galeria</li>
                    <li class="c">Contacto</li>
                    <li class="c" >Gastronomia</li>
                     <li class="c">Tradiciones</li>
                </ul>
            </nav>
                <nav>
                    <ul class="menuprincipal2">
                     <a href="IniciarSesion.php"><li class="c">Inicia sesion</li></a>
                    <a href="FormularioRegistrar.html"> <li class="c">Registrar</li></a>
                    </ul>
                </nav>
                
</div>
<!--             <img src="logo-huetamo2.png" class="logohuetamo" height="100px" width="150px">-->
            
        </header>
        <section>
            <div class="container">

			<!-- Codrops top bar -->

            <div class="codrops-top">

                

              

              <div class="clr">
</div>

            </div>

		
			<section class="cr-container">

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
      
        
        
      
<!--        <section id="personajesdestacados">
                       <form >
                    -->
<!--<fieldset>
<legend><strong>Personajes</strong></legend>


<p>Fanny Cano (1944-1983), actriz y productora</p>
<p>Amalia Mendoza García (1923-2001), cantante.</p>
<p>José Guadalupe Cruz "el profe cruz". Ex jugador profesional y técnico de la primera división mexicana de fútbol.</p>
<p>Martín Urieta Solano Cantante.</p>

</fieldset>-->
                    </form>
            
            
                   </section>
        
        <section class="galeriatodo"><!--
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
<!--        <aside id="inicioSesion">
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
          
                
           
        </aside>-->
<!--        <footer>
            <br/>
             <br/>
             <p >Visitanos en Nuestras Redes Sociales<</p>
             <div>
                 <center>
             <img src="redes/facebook.png">
               <img src="redes/twiter.png">
                <img src="redes/men.png">
                 </center>
             </div>
                 
              <br/>
               <br/>
               <br/>
             
        </footer>-->
       
            <br/>
            <!--
            <div>
                <p  class="subtitulo">Principales Atracciones</p>
                
                <p class="atracciones">Inglesia de San Juan Bautista</p>
                <Center><img src="huetamo.jpg"></Center>
                
            </div>-->
       
    </body>
</html>
