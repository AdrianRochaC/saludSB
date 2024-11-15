<?php

  //iniciar la sesion
  session_start();

  //Si existe la sesion ir a la bienvenida
  if(isset($_SESSION['correo'])){
    header("location: ../sesion_index.html");
  }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Droguería Salud y Bienestar</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <header>
    <div class="logo">
      <a href="Index.html"><img src="img/Leonardo_Phoenix_Descripcin_Crea_un_logo_para_la_Droguera_Salu_2-removebg-preview (1).png" alt="Droguería Salud y Bienestar"></a>
    </div>
    <nav>
      <form action="#" method="get">
        <input class="busqueda" type="text" name="search" placeholder="Search">
      </form>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="login-form" id="loginForm">
        <h2>Iniciar sesión</h2>
        <form id="loginFormSubmit" method="POST" action="php/login_sb.php">
          <input class="usuario" type="text" id="loginUsername" placeholder="Usuario o correo" name="correo"><br><br>
          <input class="contraseña" type="password" id="loginPassword" placeholder="Contraseña" name="contrasena"><br><br>
          <button type="submit">Iniciar Sesión</button><br><br>
          <p class="warnings" id="loginWarnings"></p>
          <p>¿No tienes una cuenta? <a href="javascript:void(0);" onclick="showRegisterForm()">Registrarse</a></p>
        </form>
      </div>
      <div class="login-form" id="registerForm" style="display: none;">
        <h2>Crear Cuenta</h2>
        <form id="registerFormSubmit" method="POST" action="php/register_sb.php">
          <input class="usuario" type="text" id="registerName" placeholder="Nombre" name="nombre"><br><br>
          <input class="usuario" type="text" id="registerLastName" placeholder="Apellido" name="apellido"><br><br>
          <input class="usuario" type="email" id="registerUsername" placeholder="Correo Electrónico" name="correo"><br><br>
          <input class="contraseña" type="password" id="registerPassword" placeholder="Contraseña" name="contrasena"><br><br>
          <input class="contraseña" type="password" id="registerConfirm" placeholder="Confirmar Contraseña" name="confirmar"><br><br>
          <button>Registrar</button><br><br>
          <p class="warnings" id="registerWarnings"></p>
          <p>¿Ya tienes cuenta? <a>Iniciar sesión</a></p>
        </form>
      </div>
      <div class="info"><br><br><br>
        <img src="img/nombre.jpeg">
      </div>
    </div><br><br>
  </main>
  <footer>
    <!-- Footer content -->
  </footer>
  <script src="js/login.js"></script>
</body>

</html>