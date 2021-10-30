<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Electronica Jácome</title>
</head>

<body>
    <div id="container">
        <nav class="menu">

            <section class="menu_container">

                <h1 class="menu_logo">Electronica Jácome</h1>


                <ul class="menu_links">

                    <!-- <li class="menu_item">
                        <a href="../../view/inicio.php" class="menu_link">Inicio</a>
                    </li> -->

                    <li class="menu_item">
                        <a href="../registro/ficha_tecnica.php" class="menu_link">Ficha de Observación</a>
                    </li>

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Registro <img src="../../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="../registro/nuevo.php" class="menu_link menu_link-inside">Nuevo</a>
                            </li>

                            <li class="menu_inside">
                                <a href="../registro/existente.php" class="menu_link menu_link-inside">Existente</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Vista <img src="../../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="../vista/listado.php" class="menu_link menu_link-inside">Listado</a>
                            </li>

                            <li class="menu_inside">
                                <a href="../vista/observacion.php" class="menu_link menu_link-inside">Ficha de
                                    Observación</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu_item">

                        <a href="../../php/includes/close.php" name="" id="menu_cerrarSesion" class="menu_link">Cerrar Sesión</a>

                    </li>

                </ul>

                <div class="menu_flex">

                    <img src="../../assets/menu.svg" class="menu_img">

                </div>

            </section>
        </nav>
    </div>

    <script src="../../js/app.js"></script>

    <div id="container_listview">

        <section class="content-view" style="  width: 95%; padding: 25px; margin: auto; margin-top: 15px; background-color: #E7E9EB; border-radius: 20px;">

            <form action="" class="frm-view">

                <div>

                    <h2 style="text-align: center;">Listado de Productos</h2>
                    <hr>

                </div>

                <div class="view_code_producto" style="margin: 10px 0; text-align: center;">

                    <input type="text" name="code" id="txt_buscar_code" placeholder="">

                    <button id="btn_buscar_code-E" type="submit" style="border-radius: 10px;">Search</button>

                </div>

                <div class="list-view" style="margin: 15px 0;">

                    <table id="list_view" class="display" style="width:100%">

                        <thead class="list_head">
                            <tr>
                                <th>Codigo</th>
                                <th>Detalles</th>
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Fecha Ingreso</th>
                                <th>Preio</th>
                                <th>Ganantia</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody class="list_body">


                        </tbody>

                    </table>

                </div>





            </form>



        </section>

        <footer style=" position: absolute; padding: 10px; bottom: 0; width: 100%; height: 60px; text-align: center; background-color: #035397;">

            <label for="">

                Desarrollda por Marcos Ramos Jácome <br>2020-2021

            </label>

        </footer>


    </div>

</body>

</html>