
<?php
session_start();
?>
<html lang="es">
<!-- Cabecera documento incluye codificación caracteres, hoja de estilo, titulo -->

<head>
    <meta charset="UTF-8">
    <title> Compra Libros || Amazoff</title>
    <link rel="stylesheet" href="CSS/estiloCompraLibros.css">
</head>
<!-- Cuerpo Documento contiene menu, galeria responsiva-->

<body>
    <h1 class=" pageNameBooks">Los mejores libros a la venta </h1>
    <div id=main>
        <!--Menu con rutas relativas-->
        <div class="menu" menu>
        <?php include('menu.php');?>
        </div>
        <!-- Galeria responsiva de libros-->
        <article>
            <?php
                $categoria=$_GET['categoria'];
                include('conexBD.php');
                $query="select * from productos where categoria='" . $categoria . "'"; //categoria LIKE '%" . $clave . "%' OR "% 0 o mas caracteres cualesque

                $resultado=mysqli_query($db,$query);
                $num=mysqli_num_rows($resultado);
                for($i=0;$i<$num;$i++){
                    $fila=mysqli_fetch_array($resultado);
                    echo '<div class="responsive">';
                    echo '<div class="gallery">';
                    echo '<a target="_blank" href="imagenes/'.$fila['imagen'] . '">';
                    echo '<img src="imagenes/'.$fila['imagen'] . '" alt="'.$fila['titulo'] . '">';
                    echo '</a>';
                    echo '<div class="desc">'.$fila['descrip'] . '. Pvp '.$fila['precio'] . ' €<br>';
                    echo   ' <button>añadir a la cesta</button>    </div>';
                    echo '</div>';
                    echo '</div>';
                }

            ?>

        </article>


    </div>

</body>