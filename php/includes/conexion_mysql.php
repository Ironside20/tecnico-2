<?php

class conexion_mysql {


    function conectar()

    {
        $host = 'localhost:3306';
        $usuario='root';
        $clave='200978';
        $bd='bd_tecnico';
       

        if(!isset($_SESSION)) {

            session_start();
        }
        
        
        $link= new mysqli($host, $usuario, $clave, $bd);

        $acentos = $link->query("SET NAMES 'utf8'");
		$_SESSION['link']=$link;
    }
}


?>
