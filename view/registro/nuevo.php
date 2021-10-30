<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../assets/pluggins/sweetalert/dist/sweetalert2.min.css">
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

            <form action="../../php/includes/insertar.php" method="POST" name="frm-insert">

                <div>
                    <h1 class="lb_rN" style="text-align: center;">Registrar Nuevo Producto</h1>
                    <hr>
                </div>


                <div class="frm_detail" style="margin: 10px 0;">

                    <label for="code">Codigo</label>
                    <input type="text" name="codigo" id="codigo" class="input_data" style="text-align: center;">

                    <div class="details">

                        <label for="details">Detalles:</label>
                        <input type="text" id="detalles" name="detalles" class="input_data" style="text-align: center;">

                        <label for="price">Precio:</label>
                        <input type="text" name="precio" id="precio" class="input_data" style="text-align: center;">


                    </div>


                </div>

                <div class="frm_selector" style="margin: 10px 0">

                    <span class="q_dropdown">

                        <label for="quantity" class="a_native_dropdown">Cantidad:</label>

                        <select id="cantidad" name="cantidad" autocomplete="off" tabindex="0" class="sl_quantity" aria-pressed="false">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                        </select>

                    </span>

                    <span class="c_dropdown">

                        <label for="category" class="a_native_dropdown">Categoria:</label>

                        <input type="text" id="categoria" name="categoria" list="list-categoria" style="text-align: center; width: 120px;">

                        <datalist name="categoria" id="categoria" autocomplete="off" tabindex="0" class="sl_mark" aria-pressed="false">
                            <option value="Radio"></option>
                            <option value="Parlante"></option>
                            <option value="Amplificadores"></option>
                            <option value="Bajos"></option>
                        </datalist>

                    </span>

                    <span class="m_dropdown">

                        <label for="mark" class="a_native_dropdown">Marca:</label>

                        <input type="text" name="marca" id="marca" style="width: 70px; text-align: center;">

                    </span>

                </div>

                <div class="frm_dates">
                    
                    <label for="date">Fecha:</label>
                    <input type="date" id="fecha_ingreso" name="fecha_ingreso">

                    <input type="text" name="garantia" id="garantia" style="text-align: center; width: 100px;" placeholder="Garantia">

                </div>

                <div class="status">

                    <label for="status">Estado</label>
                    <input type="text" name="estado" id="estado" class="input_data" style="text-align: center;">

                </div>

                <button id="enviar" name="enviar" type="submit">Insertar</button>

            </form>

            <?php
            include("../../php/includes/sentencias.php");
            ?>

        </section>

        <footer style=" position: absolute; padding: 10px; bottom: 0; width: 100%; height: 60px; text-align: center; background-color: #035397;">

            <label for="">

                Desarrollda por Marcos Ramos Jácome <br>2020-2021

            </label>

        </footer>

    </div>

</body>

<script src="../../assets/pluggins/sweetalert/dist/sweetalert2.min.js"></script>

</html>