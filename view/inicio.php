<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Electronica Jácome</title>
</head>

<body>
    <div id="container">
        <nav class="menu">

            <section class="menu_container">

                <h1 class="menu_logo">Electronica Jácome</h1>

                <ul class="menu_links">

                    <li class="menu_item">
                        <a href="registro/ficha_tecnica.php" class="menu_link">Ficha de Observación</a>
                    </li>

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Registro <img src="../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="registro/nuevo.php" class="menu_link menu_link-inside">Nuevo</a>
                            </li>

                            <li class="menu_inside">
                                <a href="registro/existente.php" class="menu_link menu_link-inside">Existente</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu_item menu_item-show">
                        <a href="#" class="menu_link">Vista <img src="../assets/arrow.svg" class="menu_arrow"></a>

                        <ul class="menu_nesting">

                            <li class="menu_inside">
                                <a href="vista/listado.php" class="menu_link menu_link-inside">Listado</a>
                            </li>

                            <li class="menu_inside">
                                <a href="vista/observacion.php" class="menu_link menu_link-inside">Ficha de
                                    Observación</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu_item">

                        <a href="../php/includes/close.php" name="" id="menu_cerrarSesion" class="menu_link">Cerrar Sesión</a>

                    </li>

                </ul>

                <div class="menu_flex">

                    <img src="../assets/menu.svg" class="menu_img">

                </div>

            </section>
        </nav>
    </div>

    <script src="../js/app.js"></script>

    <div id="container_content">

        <section class="content" style="margin-top: 200px;">

            <form action="">
            
                <div class="">

                    <h1 style="text-align: center;">Bienvenido</h1>

                </div>

                <hr>

                <div class="" style="margin: 10px 0; text-align: justify;">

                    <label for="">Esta es una Aplicación desarrollada para la Electronica Jácome que permitará el registro del servicio técnico que se lleva a cabo en el taller. Para que a futuro no se repitan los errores cometidos durante el procedimiento hecho por el técnico. Llevando un control de las reparaciones aplicadas con el fin de evitar reincidencias sobre el servicio realizado.</label>

                </div>


        </form>
        
        </section>

        <footer style=" position: absolute; padding: 10px; bottom: 0; width: 100%; height: 60px; text-align: center; background-color: #035397;">

            <label for="" class="lb_footer">

                Desarrollda por Marcos Ramos Jácome <br>2020-2021

            </label>

            </footer>

    </div>


</body>

</html>