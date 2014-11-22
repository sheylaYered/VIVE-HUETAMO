<!DOCTYPE html>

<html>
    <head>
        <title>Registrar Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


         <link rel="stylesheet" type="text/css" href="css/demo.css" />
         <link rel="stylesheet" type="text/css" href="css/style3.css" />
         <link rel="stylesheet" href="css/Estilo1.css"> 
         <script type="text/javascript" src="js/calculos.js"> </script>
         <link rel="stylesheet" href="css/estiloprincipal.css"> 

    </head>

    <body style="background-color: darkturquoise;">
       <?php
include('menu.php');
?>  
        
        <?php
if(isset($_POST["nombre"]) && isset($_POST["pass"])){
    $consulta = mysqli_query(base::$conexion,"select nombre,pass from usuario where nombre='".$_POST["nombre"]."' and pass=contrasena('".$_POST["pass"]."')");
     if ($datos = mysqli_fetch_array($consulta)){
    session_start();
    $_SESSION["aut"]=$_POST["nombre"];
    echo  
    '<br>Bienvenido: '.$_SESSION["aut"];
        header("Location: index.php");
        
    }else{
        echo '<br>usuario o contrase&ntilde;a incorrecta';
    }
}
?>
         
    </body>
</html>
