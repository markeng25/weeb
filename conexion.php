<?php
$servername = "localhost"; // Servidor (usualmente "localhost")
$username = "root"; // Usuario de MySQL (por defecto en XAMPP/WAMP es "root")
$password = ""; // Contraseña (en XAMPP/WAMP suele estar vacía)
$database = "marketing25"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>