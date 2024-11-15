<?php

    session_start();

    if(!isset($_SESSION['correo'])){
        echo '
            <script>
                alert("Debes iniciar sesion");
                window.location = "../login.php";
            </script>
        ';
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Salud y Bienestar</title>
    <link rel="icon" type="image/png" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/OperacionCarrito.js" defer></script>

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
              <a href="perfil1.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg></a>
          </form>
      </nav>
    </header>

<main>
    <section id="contenido">
       <center>
          <br><br>
          <img id="t1" src="../img/titulo1.jpeg" alt="Título">
          <br><br>
          <h2>Carrito de Compras</h2>
          
          <!-- Contenedor donde se mostrarán los productos -->
          <div id="carrito-lista"></div>
 
          <br>
          <h3>Total: $<span id="total">0</span></h3>
          <br>
          <a href="pago.php"><button style="background-color: #559EC4; color: black; height: 40px; width: 120px; border-radius: 15px; border: none;">Proceder al Pago</button></a>
          <br><br>
       </center>
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