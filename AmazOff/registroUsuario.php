<!DOCTYPE HTML>
<html>
<!-- Cabecera documento incluye codificación caracteres, hoja de estilo, titulo -->

<head>
  <meta charset="UTF-8">
  <title> Registro Usuario</title>
  <link rel="stylesheet" href="CSS/contact.css">
</head>
<!-- Cuerpo Documento contiene Título, menu, contenedor con formulario-->

<body>
  <div id="main">
    <!--Menu con rutas relativas AÑADIR ROLLO HEADER O ALGO A LO LARGO DE TODO??-->
    <div class="menu" menu>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="compraLibros.html">Compra Libros</a></li>
        <li><a href="compraCds.html">Compra CDs</a></li>
        <li><a class="active" href="registroUsuario.php">Registro Usuario</a></li>
        <li><a href="Index.html#about">About</a></li>
      </ul>
    </div>
    <!-- Contendor con formulario contiene datos obligatorios, con autocomplete y botón de entrega con AJAX-->
    <div class="container">
      <fieldset>
        <form name="Registro" action="registroUsuarioPHP.php" method="POST">
          <h1>Registrate</h1>
          <label for="login">Login:</label><br />
          <input id="login" name="login" type="text"  maxlength="100" autofocus required  />
          <br /><br />
          <!--Añadir password y login etc a CSS-->
         <label for="password">Password:</label><br />
          <input id="pass" name="pass" type="text"  maxlength="100" required autofocus autocomplete="new-password" />
          <br /><br />
          <label for="firstName">Nombre:</label><br />
          <input id="nombre" name="nombre" type="text"  maxlength="100" required autofocus autocomplete="given-name" />
          <br /><br />
          <label for="surname">Apellidos:</label><br />
          <input id="apellidos" name="apellidos" type="text" maxlength="100" required autofocus autocomplete="family-name">
          <br /><br />
          <label for="fechaNac">Fecha Nacimiento:</label><br />
          <input id="fechaNac" name="fechaNac" type="text" maxlength="100" required autofocus placeholder="DD/MM/YYYY">
          <br /><br />
          <label for="personal_mail">Email:</label><br />
          <input id="email" name="email" type="email" required autofocus autocomplete="email">
          <br /><br />
          ¿Cómo nos conoces?
          <input id="donde" name="donde[]" type="checkbox" value="Radio" />Radio
          <input id="donde" name="donde[]" type="checkbox" value="Television" />Televisión
          <input id="donde" name="donde[]" type= "checkbox" value="Internet"/>Internet
          <br /><br />
          <input id="submit" type="submit" value="Submit" />

      </fieldset>
    </div>
  </div>



</body>

</html>