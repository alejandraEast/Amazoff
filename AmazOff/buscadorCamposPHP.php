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
                @ $titulo=test_input($_POST['titulo']);
                @ $descrip=test_input($_POST['descrip']);
                @ $categoria=test_input($_POST['categoria']);
                @ $precio=test_input($_POST['precio']);
                @ $id_prod;
                function test_input($data) {
                  $data = trim($data);
                  $data = addslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                  
                }

                include('conexBD.php');
                $query = "select * from productos where titulo like '%". $titulo . "%' and descrip like '%". $descrip . "%' and categoria like '%". $categoria . "%'";
               
                if(is_numeric($precio))
                  
                $query .= " and precio <=" . $precio;

                $resultado=mysqli_query($db,$query);
                $num=mysqli_num_rows($resultado);
                for($i=0;$i<$num;$i++){
                    $fila=mysqli_fetch_array($resultado);
                    echo $fila['id_prod'];
                    echo '<div class="responsive">';
                    echo '<div class="gallery">';
                    echo '<a target="_blank" href="imagenes/'.$fila['imagen'] . '">';
                    echo '<img src="imagenes/'.$fila['imagen'] . '" alt="'.$fila['titulo'] . '">';
                    echo '</a>';
                    echo '<div class="desc">'.$fila['descrip'] . '. Pvp '.$fila['precio'] . ' €<br>';
                    echo '<form action="carritoPHP.php" method="POST" >';
                    echo  '<input type="hidden" name="id_prod" value="'.$fila['id_prod'] .'" />';
                    echo   ' <button type="submit" >añadir a la cesta</button>  </div>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                }
                

                mysqli_free_result($resultado);

                mysqli_close($db);
            ?>

        </article>


    </div>

</body>

    