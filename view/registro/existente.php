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
                        <a href="ficha_tecnica.php" class="menu_link">Ficha de Observación</a>
                    </li>

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Registro <img src="../../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="nuevo.php" class="menu_link menu_link-inside">Nuevo</a>
                            </li>

                            <li class="menu_inside">
                                <a href="existente.php" class="menu_link menu_link-inside">Existente</a>
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

    <div id="container">

        <section class="content">

            <form class="frm" action="">

                <div>

                    <h1 class="lb_existente" style="text-align: center;">Agregar Existente</h1>
                    <hr>

                </div>

                <div class="u_codeP">

                    <h2>Datos del Producto</h2>

                    <input type="text" name="code" id="txt_buscar_code-E" placeholder="Ingrese el codigo">

                    <button id="btn_buscar_code-E" style="border-radius: 10px;">Search</button>

                </div>

                <div class="frm_new-data">

                    <label for="date">Fecha:</label>
                    <input type="date">

                    <span class="q_dropdown">

                        <label for="quantity" class="a_native_dropdown">Cantidad:</label>

                        <select id="quantity" name="quantity" autocomplete="off" tabindex="0" class="sl_quantity" aria-pressed="false">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </span>

                </div>

                <button id="btn_" type="submit">Agregar</button>

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