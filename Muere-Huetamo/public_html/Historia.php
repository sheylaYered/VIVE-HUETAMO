<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <title>Historia de huetamo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/HistoriaEstilo.css">
        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
        <script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.core.js"></script>
        <script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.slide.js"></script>
        <script type="text/javascript" src="js/supersized.2.0.js"></script>
     


         <link rel="stylesheet" type="text/css" href="css/demo.css" />
         <link rel="stylesheet" type="text/css" href="css/style3.css" />
         <link rel="stylesheet" href="css/Estilo1.css"> 
         <script type="text/javascript" src="js/calculos.js"> </script>
         <link rel="stylesheet" href="css/estiloprincipal.css"> 




<script type="text/javascript">


        $(function(){
            $.fn.supersized.options = {  
                startwidth: 640,  
                startheight: 480,
                vertical_center: 1,
                slideshow: 1,
                navigation: 1,
                transition: 1, 
                pause_hover: 0,
                slide_counter: 1,
                slide_captions: 1,
                slide_interval: 3000  
            };
            $('#supersize').supersized(); 
        });
    </script>
    
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        a{
            color:#8FC2FF;
            text-decoration: none;
            outline: none;
        }
        a:hover{
            text-decoration: underline;
        }
        img{
            border:none;
        }
        body {
          
            background-color:brown;
        }
    
        
        #supersize{
            position:fixed;
            border: 2px;
            border-color: green;
        }

   
        #supersize img, #supersize a{

         border:5px;
            border-color: black;
            margin: 95px;
            margin-top: 95px;
            margin-left: 5px;
            margin-right: 95px;
            margin-bottom: 200px;
            height:50%;
            width:50%;
            position:absolute;
            z-index: 0;
        }
        #supersize .prevslide, #supersize .prevslide img{
            z-index: 1;
        }
        #supersize .activeslide, #supersize .activeslide img{
            z-index: 2;
        }


        #til{
    
color: white;
            font-size: 35px;
            font-family: "Arial";
        }
    #text{
    
color: white;

            font-size: 15px;
            font-family: "Arial";
    
        }
     
        
        
    </style>

    </head>
    <body>
       <?php
include('menu.php');
?>  
     

<div id="loading">&nbsp;</div>

<!--Slides-->
<div id="supersize">
    <a ><img src="FondoHistoria/6.jpg"  width="50px" height="50px"/></a>
    <a><img src="FondoHistoria/9.jpg" width="50px" height="50px" /></a>
  <a><img src="FondoHistoria/11.jpg" width="50px" height="50px" /></a>
   <a><img src="FondoHistoria/10.jpg" width="50px" height="50px" /></a>
   <a><img src="FondoHistoria/14.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/15.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/3.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/7.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/8.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/13.jpg" width="50px" height="50px" /></a>
 <a><img src="FondoHistoria/16.jpg" width="50px" height="50px" /></a>


</div>
<section>


<div id="titulo"> Historia de Huetamo Michoacan
</div>
<aside id="tex">




       <p> En la época prehispánica, este lugar fue sometido al señorío de los tarascos y después de la muerte del gran Tariácuri, al fraccionarse el señorío, Huetamo pasó a formar parte del señorío de Coyucan, gobernado por Hirépan, convirtiéndose en centro económico y político de importancia.</p>

<p>En el siglo XVI, la conquista de la región de Huetamo, en vez de realizarse con la espada, se realizó con la cruz, al arribar la orden religiosa de los agustinos, quienes evangelizaron a los habitantes y para 1553, Fray Juan Bautista Moya logró integrar a la población en torno de una doctrina, considerándose con esto la fundación del pueblo.</p>

<p>Más tarde, en el año de 1572, se le dio el nombramiento de Alcaldía Mayor, llamándosele San Juan Huetamo, en memoria de Fray Juan Bautista Moya. Durante el período de la lucha por la Independencia, en este pueblo, el general Don José María Morelos, exhortó a los habitantes para que se unieran a la lucha insurgente, logrando conformar un batallón de 400 hombres al mando de Don Pablo Ayala. En este mismo período, los insurgentes establecieron una junta de gobierno.</p>
    </aside>


    </body>
</html>
