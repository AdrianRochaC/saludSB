<?php
include 'conection.php';

// Agregar un nuevo producto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO products (nombre, price, stock) VALUES ('$name', '$price', '$stock')";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto agregado con éxito";
    } else {
        echo "Error: " . $conexion->error;
    }
}

// Eliminar un producto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM products WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo '
            <script>
                alert("Producto eliminado correctamente");
                window.location = "../inventario3/inventory.php"
            </script>
        ';
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
