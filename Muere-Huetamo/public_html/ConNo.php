<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
class consultar{
public function consultarUsuarios(){
$conexion =  mysqli_connect("localhost", "root", "amsc", "vivehuetamo");
$consulta = mysqli_query($conexion, "select noticia from noticias");
while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<br>
                <br>
	</tr>";
}
mysqli_close($conexion);
mysqli_free_result($consulta);
}
}
?>
