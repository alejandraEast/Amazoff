<!DOCTYPE HTML>
<html>
<!-- Cabecera documento incluye codificación caracteres, hoja de estilo, titulo -->

<head>
  <meta charset="UTF-8">
  <title> Inicar Sesión</title>
  <link rel="stylesheet" href="CSS/contact.css">
</head>

    <!-- Contendor con formulario contiene datos obligatorios, con autocomplete y botón de entrega con AJAX-->
    <div class="container">
      <fieldset>
        <form name="Sesion" action="iniciarSesionPHP.php" method="POST">
          <h1>Registrate</h1>
          <label for="login">Login:</label><br />
          <input id="login" name="login" type="text"  maxlength="100" autofocus required  />
          <br /><br />
          <!--Añadir password y login etc a CSS-->
         <label for="password">Password:</label><br />
          <input id="pass" name="pass" type="password"  maxlength="100" required autofocus autocomplete="new-password" />
          <br /><br />
         
          <input id="submit" type="submit" value="Submit" />

      </fieldset>
    </div>
 



</body>

</html>

