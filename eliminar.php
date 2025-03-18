<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["eliminar_cliente"])) {
        $id = $_POST["id"];
        $sql = "DELETE FROM clientes WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente eliminado correctamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    if (isset($_POST["eliminar_producto"])) {
        $id = $_POST["id"];
        $sql = "DELETE FROM productos WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Producto eliminado correctamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente o Producto</title>
</head>
<body>
    <h2>Eliminar Cliente</h2>
    <form method="post">
        <input type="number" name="id" placeholder="ID del Cliente" required><br>
        <button type="submit" name="eliminar_cliente">Eliminar Cliente</button>
    </form>

    <h2>Eliminar Producto</h2>
    <form method="post">
        <input type="number" name="id" placeholder="ID del Producto" required><br>
        <button type="submit" name="eliminar_producto">Eliminar Producto</button>
    </form>
</body>
</html>
