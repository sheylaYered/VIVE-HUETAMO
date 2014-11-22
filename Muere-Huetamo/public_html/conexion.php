<?php
class base {
	
/*DATOS DE CONEXION*/
static $servidor = "127.0.0.1";
static $usuario = "root";
static $password = "juan";
static $bd = "huetamo";
/*FIN DE DATOS DE CONEXION */
static $conexion = null;

    public static function conectar(){
    base::$conexion = mysqli_connect(base::$servidor, base::$usuario, base::$password);
    mysqli_select_db(base::$conexion, base::$bd);   
    }

    public static function cerrarSecion(){
    session_destroid();
    }
    
}
?>