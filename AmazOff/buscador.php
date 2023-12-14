<?php

session_start();

include('conexBD.php');



// @ $buscador=$_POST["buscador"];
// $buscador=trim($buscador);


//$query="select * from  where  ='" . $ . "'";
?>


<html>
<!-- Cabecera documento incluye codificación caracteres, hoja de estilo, titulo -->

<head>
  <meta charset="UTF-8">
  <title> Busca productos</title>
  <link rel="stylesheet" href="CSS/contact.css">
</head>
<!-- Cuerpo Documento contiene Título, menu, contenedor con formulario-->

<body>
  <div id="main">
    <!--Menu con rutas relativas AÑADIR ROLLO HEADER O ALGO A LO LARGO DE TODO??-->
    <div class="menu" menu>
    <?php include('menu.php');?>
    </div>
    <!-- NO segura si post para buscador al mismo sitio?¿?¿?¿?¿ .s,dflajsdlfj-->
    <div class="container">
      <fieldset>
        <form name="Buscador" action="buscadorGeneral.php" method="POST">
          <h1>Buscar por:</h1>
          <h2>Palabra clave:</h2>
          <label for="palabraClave">Palabra Clave:</label><br />
          <input id="palabraClave" name="palabraClave" type="text"  maxlength="100" />
          <button id = "buscarClave" type="submit"  >buscar</button> 
          <button id = "borrar">borrar</button> 
</form>
          <!--Añadir password y login etc a CSS-->
        <form name="Buscador" action="buscadorCamposPHP.php" method="POST">
          <h2>campos:</h2>
        <label for="titulo">Títulos:</label><br />
          <input id="titulo" name="titulo" type="text"  maxlength="100" />
          <br /><br />
          <label for="descrip">Descripción:</label><br />
          <input id="descrip" name="descrip" type="text"  maxlength="100" />
          <br /><br />
          <label for="categoria">Categoria:</label><br />
          <select name="categoria" id="categoria">
            <option value="CD">CD</option>
            <option value="libro">Libro</option>
          </select>
          <br /><br />
          <label for="precio">Precio máximo:</label><br />
          <input id="precio" name="precio" type="float"/>
          <button id = "buscarCampos" type="submit" >buscar</button> 
          <button id = "borrar">borrar</button> 
          
          <br /><br />
          </form>

      </fieldset>
    </div>
  </div>



</body>

</html>