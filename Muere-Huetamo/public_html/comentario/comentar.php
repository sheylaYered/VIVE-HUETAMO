<?php
$comentario =$_POST['comentario'];


$grabar = fopen("comentario/com.html", "a");
fwrite($grabar, "<p>$comentario</p>");
fclose($grabar);
include("indexcomentario.php");



?>