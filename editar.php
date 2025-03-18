<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["editar_cliente"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        $sql = "UPDATE clientes SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente actualizado correctamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    if (isset($_POST["editar_producto"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];

        $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Producto actualizado correctamente.";
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
    <title>Editar Cliente o Producto</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form method="post">
        <input type="number" name="id" placeholder="ID del Cliente" required><br>
        <input type="text" name="nombre" placeholder="Nuevo Nombre" required><br>
        <input type="email" name="email" placeholder="Nuevo Email" required><br>
        <input type="text" name="telefono" placeholder="Nuevo Teléfono"><br>
        <button type="submit" name="editar_cliente">Editar Cliente</button>
    </form>

    <h2>Editar Producto</h2>
    <form method="post">
        <input type="number" name="id" placeholder="ID del Producto" required><br>
        <input type="text" name="nombre" placeholder="Nuevo Nombre" required><br>
        <input type="text" name="descripcion" placeholder="Nueva Descripción" required><br>
        <input type="number" name="precio" placeholder="Nuevo Precio" step="0.01" required><br>
        <button type="submit" name="editar_producto">Editar Producto</button>
    </form>
</body>
</html>
