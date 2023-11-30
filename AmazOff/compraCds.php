<?php
session_start();
$login=$_SESSION['login'];
?>
<html lang="es">
<!-- Cabecera documento incluye codificación caracteres, hoja de estilo, titulo -->

<head>
    <meta charset="UTF-8">
    <title> Compra CDs || Amazoff</title>
    <link rel="stylesheet" href="CSS/estiloCompraCD.css">
</head>

<!-- Cuerpo Documento contiene contendor en cuadrícula con Título, menu, galeria responsiva-->

<body>


    <div class="grid-container">

        <div class="item1"> Compra tus CDs favoritos a la venta</div>

        <!--Menu con rutas relativas-->
        <div class="item2">

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="compraLibros.html">Compra Libros</a></li>
                <li><a class="active" href="compraCds.html">Compra CDs</a></li>
                <li><a href="registroUsuario.php">Registro Usuario</a></li>
                <li><a href="index.html#about">About</a></li>
            </ul>
        </div>

        <!--Galeria responsiva-->
        <div class="item3">

            <div class="responsive">
                <div class="gallery">

                    <img src="imagenes/rosalia.png" alt="CD a la venta : rosalia">

                    <div class="desc">Rosalia. El mal querer. Pvp 7.90€</div>
                </div>

                <div class="gallery">

                    <img src="imagenes/queen.png" alt="Album a la venta: Queen">

                    <div class="desc">Queen. Greatest Hits II. Pvp 11.99€ </div>
                </div>

                <div class="gallery">

                    <img src="imagenes/banzai.png" alt="CD a la venta :Banzai">

                    <div class="desc">Gata Cattana. Banzai. Pvp 14€</div>
                </div>

                <div class="gallery">

                    <img src="imagenes/nirvana.png" alt="CD a la venta :nirvana">

                    <div class="desc">Nirvana. Nevermind. Pvp 10€</div>
                </div>

                <div class="gallery">

                    <img src="imagenes/extremo.png" alt="CD a la venta :extremoduro">

                    <div class="desc">Extremoduro. Material Defectuoso. Pvp 7.99€</div>
                </div>

                <div class="gallery">

                    <img src="imagenes/u2.png" alt="Album a la venta: u2">

                    <div class="desc">U2. October. Pvp 9.99€</div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>