<?php

    require("../includes/sentencias.php");

    if ($_POST) {
    $sentencias = new sentencias();

        switch ($_POST["accion"]){

        case "MOSTRAR_ALL":
            echo json_encode($sentencias->mostrarAll());
            break;

        case "MOSTRAR_CODIGO":
            echo json_encode($sentencias->mostrar_codigo($_POST["codigo"]));
            break;

        case "INSERTAR":

            $codigo = $_POST["codigo"];
            $detalles = $_POST["detalles"];
            $marca = $_POST["marca"];
            $categoria = $_POST["categoria"];
            $cantidad = $_POST["cantidad"];
            $precio = $_POST["precio"];
            $fecha = $_POST["fecha_ingreso"];
            $garantia = $_POST["garantia"];
            $estado = $_POST["estado"];

            $respuesta= $sentencias->insertar($codigo, $detalles, $marca, $categoria, $cantidad, $precio, $fecha,  $garantia, $estado);
            echo json_encode($respuesta);
            break;

        case "GUARDAR-FT":

            $cedula = $_POST["cedula"];
            $nombres = $_POST["nombres"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $codigoF = $_POST["codigo"];
            $detallesF= $_POST["detalles"];
            $marcaF = $_POST["marca"];
            $cantidadF = $_POST["cantidad"];
            $fechaF = $_POST["fecha_ingreso"];
            $garantiaF = $_POST["garantia"];
            $tecnico = $_POST["tecnico"];
            $observacion = $_POST["observacion"];

            $respuesta = $sentencias->guardarFT($cedula, $nombres, $telefono, $email, $codigoF, $detallesF, $marcaF, $cantidadF, $fechaF, $garantiaF, $tecnico, $observacion);
            echo json_encode($respuesta);
            break;

        case "MODIFICAR":
            
            $codigo = $_POST["codigo"];
            $detalles = $_POST["detalles"];
            $marca = $_POST["marca"];
            $categoria = $_POST["categoria"];
            $cantidad = $_POST["cantidad"];
            $precio = $_POST["precio"];
            $fecha = $_POST["fecha_ingreso"];
            $garantia = $_POST["garantia"];
            $estado = $_POST["estado"];
            $id_producto =$_POST["id_producto"];

            $respuesta = $sentencias->modificar($id_producto, $codigo, $detalles, $marca, $categoria, $cantidad, $precio, $fecha,  $garantia, $estado);
            echo json_encode($respuesta);
         
            break;

        case "ELIMINAR":

            $id_producto = $_POST["id_producto"];

            $respuesta = $sentencias->eliminar($id_producto);
            echo json_encode($respuesta);
           
            break;

            
        }
    }

?>