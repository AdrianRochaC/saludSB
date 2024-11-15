<?php

    include 'conection.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmar = $_POST['confirmar'];

    //encriptar
    $contrasena = hash('sha512', $contrasena);
    $confirmar = hash('sha512', $confirmar);

    //no repeticion del correo en la BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM register WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta en uso!!");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    $query = "INSERT INTO register (nombre, apellido, correo, contrasena, confirmar) VALUES
                ('$nombre', '$apellido', '$correo', '$contrasena', '$confirmar')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente!");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, Usuario no almacenado exitosamente!");
                window.location = "../login.php"
            </script>
         ';
    }

    mysqli_close($conexion);

?>