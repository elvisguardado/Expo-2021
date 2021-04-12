<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/dashboard/plantilla_login.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
plantilla_login::headerTemplate('Principal');
?>

<!-- Estructura del Login -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="contact-wrapper">
    <div class="left_side">
      <!-- Se manda a llamar la imagen que se usara como logo -->
      <img src="../../resources/img/index_public/logo.jpg" width="270" height="250">
    </div> <!-- Titulo que tendra el login-->
    <div class="right_side">
      <h2>Iniciar Sesión</h2>
      <form>
        <div class="form-row">
          <input type="text" required>
          <!-- Se pide el nombre de usuario o el correo electronico que sera un proceso necesario -->
          <span>Nombre de usuario o correo electrónico</span>
        </div>
        <div class="form-row">
          <input type="password" required> <!-- Se pide la contraseña que este proceso tambien sera necesario -->
          <span>Contraseña</span>
        </div>
        <div class="form-row"></div>
        <div class="form-row">
          <!-- Se establece un boton con un link al haber iniciado sesion -->
          <button type="submit"><a href="../../views/dashboard/principal.php">Ingrese a su cuenta</button></a>
        </div>
      </form> <!-- Las redes sociales de la empresa -->
      <div class="socials-wrapper">
        <h2>Inicie sesión con su cuenta social</h2>
        <ul>
          <li><a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
plantilla_login::footerTemplate('index.js');
?>