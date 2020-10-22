<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'beirmoae6wnbbif9kpqo-mysql.services.clever-cloud.com');
        define('nombre_bd', 'beirmoae6wnbbif9kpqo');
        define('usuario', 'u9dtlbktibcwz5cc');
        define('password', 'BAd9l8dQ6cjoIqUTdFbK');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');	
        		
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
            echo 'Exito';			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
?>
