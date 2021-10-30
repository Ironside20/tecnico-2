<?php
//cierre de SESION y destruccion de estructuras
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['clave']);
        session_destroy();
        echo "<script type='text/javascript'> document.location = '../../index.php'; </script>";

?>
