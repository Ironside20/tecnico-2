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

                    <!-- <li class="menu_item">
                        <a href="ficha_tecnica.php" class="menu_link">Ficha de Observación</a>
                    </li> -->

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Registro <img src="../../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="nuevo.php" class="menu_link menu_link-inside">Nuevo</a>
                            </li>

                            <li class="menu_inside">
                                <a href="ficha_tecnica.php" class="menu_link menu_link-inside">Ficha</a>
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

    <!--AQUI EMPIEZA EL CONTENIDO-->

    <div id="container">

        <section class="content">

            <form class="frm" action="">

                <div class="title">

                    <h1 class="lb_title" style="text-align: center;">Ficha Tecnica</h1>
                    <hr>

                </div>

                <div class="frm_cliente">

                    <article>

                        <h2>Datos del Cliente</h2>

                        <label for="cedula">Cedula:</label>
                        <input type="text" id="cedula" name="cedula" class="input_data" style="text-align: center;">

                        <div>

                            <label for="names">Nombres:</label>
                            <input type="text" id="nombres" name="nombres" class="input_data" style="text-align: center;">

                        </div>


                        <label for="phone">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="input_data" style="text-align: center;">

                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" class="input_data" style="width: 250px; text-align: center;">

                        <hr>

                    </article>



                </div>

                <div class="frm_producto">

                    <h2>Datos del Producto</h2>

                    <label for="code">Codigo:</label>
                    <input type="text" id="codigoft" name="codigo" style="text-align: center;">
                    <button id="btn_buscar" class="btn_buscarFT">Buscar</button>

                    <div class="frm_detail">

                        <label for="details">Detalles:</label>
                        <input type="text" id="detalles" name="detalles" class="input_data" style="text-align: center;">

                    </div>


                    <div class="frm_selector">

                        <span class="q_dropdown">

                            <label for="quantity" class="a_native_dropdown">Cantidad:</label>

                            <select id="cantidad" name="cantidad" autocomplete="off" tabindex="0" class="sl_quantity" aria-pressed="false">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </span>

                        <span class="m_dropdownFT">

                            <label for="mark" class="a_native_dropdown">Marca:</label>

                            <input type="text" name="marca" id="marca" style="width: 70px; text-align: center;">
                        </span>


                    </div>

                    <div class="frm_dates">

                        <label for="date">Fecha:</label>
                        <input type="date" id="fecha_ingreso" name="fecha_ingreso">

                        <input type="text" name="garantia" id="garantia" style="text-align: center; width: 100px;" placeholder="Garantia">

                    </div>

                    <div class="frm_observacion">

                        <label for="technical">Técnico:</label>
                        <input type="text" name="tecnico" id="tecnico" class="input_data" style="text-align: center;">

                        <div>
                            <label for="remark">Observación:</label>
                            <br>
                            <textarea name="observacion" id="observacion" cols="30" rows="10" style="text-align: justify;"></textarea>

                        </div>

                    </div>

                    <button id="enviar" name="enviar" type="submit">Enviar</button>

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