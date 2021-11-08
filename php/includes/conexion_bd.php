<?php

    class conectarR extends PDO {

        public function __construct(){
            try {
                
                parent::__construct("mysql:host=localhost;dbname=bd_tecnico", "root", "");
                parent::exec("SET names utf8");

            } catch (PDOException $e) {
                
                echo "Error de conexión" . $e->getMessage();
                exit;
            }
        }
     
    }

?>