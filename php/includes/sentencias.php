<?php

require("conexion_bd.php");

class sentencias {

    public function mostrarAll (){
        $conn= new conectarR();
        $stmt = $conn->prepare("SELECT * FROM producto");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function mostrar_codigo($codigo){
        $conn = new conectarR();
        $stmt = $conn->prepare("SELECT * FROM producto WHERE codigo = :codigo");
        $stmt->bindValue(":id_producto", $codigo, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);

    }

    public function insertar ($codigo, $detalles, $marca, $categoria, $cantidad, $precio, $fecha, $garantia, $estado) {

        $conn =new conectarR ();
        $stmt= $conn->prepare ("INSERT INTO producto (codigo, detalles, marca, categoria, cantidad, fecha_ingreso, precio, garantia, estado)
                            VALUES (:codigo, :detalles, :marca, :categoria, :cantidad, :precio, :fecha_ingreso, :garantia, :estado);");

        $stmt->bindValue(":codigo", $codigo, PDO::PARAM_STR);
        $stmt->bindValue(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindValue(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindValue(":categoria", $categoria, PDO::PARAM_STR);
        $stmt->bindValue(":cantidad", $cantidad, PDO::PARAM_STR);
        $stmt->bindValue(":precio", $precio, PDO::PARAM_STR);
        $stmt->bindValue(":fecha_ingreso", $fecha, PDO::PARAM_STR);
        $stmt->bindValue(":garantia", $garantia, PDO::PARAM_STR);
        $stmt->bindValue(":estado", $estado, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "Datos ingresados correctamente";
            }else{
                return "Error al insertar datos";
            }
    }

    public function guardarFT ($cedula, $nombres, $telefono, $email, $codigoF, $detallesF, $marcaF, $cantidadF, $fechaF, $garantiaF, $tecnico, $observacion) {

        $conn = new conectarR();
        $stmt = $conn->prepare("INSERT INTO seg_fichatecnica (cedula_c, nombres_c, telefono_c, email_c, codigo_p, detalles_p, marca, cantidad_p, fecha_ft, garantia_p, tecnico_t, observacion_ft) 
                                VALUES (:cedula_c, :nombres_c, :telefono_c, :email_c, :codigo_p, :detalles_p, :marca, :cantidad_p, :fecha_ft, :garantia_p, :tecnico_t, :observacion_ft)");

        $stmt->bindValue(":cedula_c", $cedula, PDO::PARAM_STR);
        $stmt->bindValue(":nombres_c", $nombres, PDO::PARAM_STR);
        $stmt->bindValue(":telefono_c", $telefono, PDO::PARAM_STR);
        $stmt->bindValue(":email_c", $email, PDO::PARAM_STR);
        $stmt->bindValue(":codigo_p", $codigoF, PDO::PARAM_STR);
        $stmt->bindValue(":detalles_p", $detallesF, PDO::PARAM_STR);
        $stmt->bindValue(":marca", $marcaF, PDO::PARAM_STR);
        $stmt->bindValue(":cantidad_p", $cantidadF, PDO::PARAM_STR);
        $stmt->bindValue(":fecha_ft", $fechaF, PDO::PARAM_STR);
        $stmt->bindValue(":garantia_p", $garantiaF, PDO::PARAM_STR);
        $stmt->bindValue(":tecnico_t", $tecnico, PDO::PARAM_STR);
        $stmt->bindValue(":observacion_ft", $observacion, PDO::PARAM_STR);
  

        if ($stmt->execute()) {
            return "Datos ingresados correctamente";
        } else {
            return "Error al insertar datos";
        }
    }

    public function modificar ($id_producto, $codigo, $detalles, $marca, $categoria, $cantidad, $precio, $fecha, $garantia, $estado) {

        $conn = new conectarR();
        $stmt = $conn->prepare("UPDATE producto 
                                    SET codigo = :codigo, 
                                        detalles= :detalles,
                                        marca= :marca,
                                        categoria = :categoria,
                                        cantidad= :cantidad,
                                        precio= :precio,
                                        fecha_ingreso= :fecha_ingreso,
                                        garantia= :garantia,
                                        estado= :estado
                                    WHERE id_producto = :id_producto;");

        $stmt->bindValue(":codigo", $codigo, PDO::PARAM_STR);
        $stmt->bindValue(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindValue(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindValue(":categoria", $categoria, PDO::PARAM_STR);
        $stmt->bindValue(":cantidad", $cantidad, PDO::PARAM_STR);
        $stmt->bindValue(":precio", $precio, PDO::PARAM_STR);
        $stmt->bindValue(":fecha_ingreso", $fecha, PDO::PARAM_STR);
        $stmt->bindValue(":garantia", $garantia, PDO::PARAM_STR);
        $stmt->bindValue(":estado", $estado, PDO::PARAM_STR);
        $stmt->bindValue(":id_producto", $id_producto, PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "Datos modificados correctamente";
        } else {
            return "Error al modificar datos";
        }
    }

    public function eliminar ($id_producto) {

        $conn = new conectarR();
        $stmt = $conn->prepare("DELETE FROM `producto` WHERE id_producto = :id_producto");

        $stmt->bindValue(":id_producto", $id_producto, PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "Datos eliminado correctamente";
        } else {
            return "Error al eliminar los datos";
        }
    }
}


?>
