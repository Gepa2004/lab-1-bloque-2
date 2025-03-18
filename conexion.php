<?php
$host = "localhost";
$user = "root";
$dbname = "clientedb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
