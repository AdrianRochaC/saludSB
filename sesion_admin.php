<?php

    session_start();

    if(!isset($_SESSION['correo'])){
        echo '
            <script>
                alert("Debes iniciar sesion como administrador");
                window.location = "login.php";
            </script>
        ';
    }

?>


<!DOCTYPE html>
<html>
<head>
<title>Salud y Bienestar</title>
<link rel="icon" type="Logo/png" href="img/Logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/OperacionCarrito.js" defer></script>
</head>
<body>
  <header>
    <div class="logo">
      <a href="sesion_index.php"><img src="img/Leonardo_Phoenix_Descripcin_Crea_un_logo_para_la_Droguera_Salu_2-removebg-preview (1).png" alt="Droguería Salud y Bienestar"></a>
  </div>
  <nav>
      <form action="#" method="get" class="search">
          <a href="php/perfil1.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg></a>
          <a href="php/cerrar_sesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
          </svg></a>
      </form>
  </nav>
</header>

 <main>
    <section id="contenido">
    <center>
    <img <img id="t1" src="img/titulo1.jpeg">
    
  <table>
  <tr>
      <td> <a href="inventory.php"><img <img id="Menu" src="img/admin2.jpeg"></a></td>
        <td> <a href="inventory.php"><img <img id="Menu" src="img/admin2.jpeg"></a></td>
   </tr>
    </table>
    <br><br>

</center>
  <center>
    <section id="redesSociales">
        <a href="https://es-la.facebook.com/login/" target="blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/?hl=es" target="blank"><i class="bi bi-instagram"></i></a>
        <a href="https://web.whatsapp.com/" target="blank"><i class="bi bi-whatsapp"></i></a>
    </section>
    </center> 
</body>
</html>
</body>
</html>