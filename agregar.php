<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["agregar_cliente"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente agregado correctamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    if (isset($_POST["agregar_producto"])) {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];

        $sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
        if ($conn->query($sql) === TRUE) {
            echo "Producto agregado correctamente.";
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
    <title>Agregar Cliente o Producto</title>
</head>
<body>
    <h2>Agregar Cliente</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telefono" placeholder="Teléfono"><br>
        <button type="submit" name="agregar_cliente">Agregar Cliente</button>
    </form>

    <h2>Agregar Producto</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="descripcion" placeholder="Descripción" required><br>
        <input type="number" name="precio" placeholder="Precio" step="0.01" required><br>
        <button type="submit" name="agregar_producto">Agregar Producto</button>
    </form>
</body>
</html>
