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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse SyB</title>
    <link rel="stylesheet" href="../css/pago.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="logo">
          <a href="sesion_index.php"><img src="../img/Leonardo_Phoenix_Descripcin_Crea_un_logo_para_la_Droguera_Salu_2-removebg-preview (1).png" alt="Droguería Salud y Bienestar"></a>
        </div>
        <nav>
          <form action="#" method="get">
            <input class="busqueda" type="text" name="search" placeholder="Search">
          </form>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        </nav>
    </header>
    <main><br><br>
        <div class="container">
            <div class="login-form">
                <h2>Metodo de Pago</h2>
                <form action="#" method="post" id="form">
                    <div class="input-group">
                        <input class="nombre" type="text" name="name" id="name" placeholder="Nombre" required>
                        <input class="apellido" type="text" name="last_name" id="last_name" placeholder="Apellido" required>
                    </div>
                    <input class="correo" type="text" name="username" id="username" placeholder="Correo Electronico" required><br><br>
                    <label for="opciones">Selecciona una opción:</label><br>
                    <select id="opciones" name="pagos">
                        <option value="inicio">Seleccione:</option>
                        <option value="opcion1">Efectivo</option>
                        <option value="opcion2">Nequi</option>
                        <option value="opcion3">Daviplata</option>
                        <option value="opcion4">Tarjeta</option>
                    </select><br>
                    <input class="direccion" type="text" name="direction" id="direction" placeholder="Direccion" required><br><br>
                    <input class="telefono" type="tel" name="telefono" id="telefono" placeholder="Ej: +34 600 123 456" required pattern="[0-9\s\+\-]+" title="Introduce un número de teléfono válido" required><br><br><br><br>
                    <button type="submit">Aceptar</button><br><br>
                    <p class="warnings" id="warnings"></p>
                </form>
            </div>
        </div><br><br>
    </main>
    <center>
        <section id="redesSociales">
            <a href="https://es-la.facebook.com/login/" target="blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/?hl=es" target="blank"><i class="bi bi-instagram"></i></a>
            <a href="https://web.whatsapp.com/" target="blank"><i class="bi bi-whatsapp"></i></a>
        </section>
        </center> 
    <script src="js/pago.js"></script>
</body>
</html>
</body>
</html>