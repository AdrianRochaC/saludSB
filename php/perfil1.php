<?php

    session_start();

    if(!isset($_SESSION['correo'])){
        echo '
            <script>
                alert("Debes iniciar sesion");
                window.location = "login.php";
            </script>
        ';
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="icon" type="image/png" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <header>
        <div class="logo">
          <a href="../sesion_index.php"><img src="../img/Leonardo_Phoenix_Descripcin_Crea_un_logo_para_la_Droguera_Salu_2-removebg-preview (1).png" alt="Droguería Salud y Bienestar"></a>
      </div>
      <nav>
        <form action="#" method="get" class="search">
            <input class="busqueda" type="text" name="search" placeholder="Buscar...">
            <button type="submit" aria-label="Buscar">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.397l3.853 3.853a1 1 0 0 0 1.414-1.414l-3.853-3.853zm-5.242 1.656a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"/>
                </svg>
            </button>
            <a href="carrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
            </svg></a>
            <a href="perfil1.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg></a>
            <a href="cerrar_sesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
            </svg></a>
        </form>
      </nav>
    </header>

    <main>
        <section id="contenido">
            <div class="perfil-container">
                <div class="info-perfil">
                    <h2>Nombre: Juan</h2>
                    <h3>Apellido: Pérez</h3>
                    <p>Correo: juan.perez@example.com</p>
                    <p>Dirección: Calle Falsa 123, Ciudad</p>
                    <p>Teléfono: +34 600 123 456</p>
                </div>
                <div class="imagen-perfil">
                    <img src="../img/perfil1.jpeg" alt="Imagen de Perfil">
                </div>
            </div>
        </section>
    </main>
    <center>
        <section id="redesSociales">
            <a href="https://es-la.facebook.com/login/" target="blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/?hl=es" target="blank"><i class="bi bi-instagram"></i></a>
            <a href="https://web.whatsapp.com/" target="blank"><i class="bi bi-whatsapp"></i></a>
        </section>
    </center> 
</body>
</html>