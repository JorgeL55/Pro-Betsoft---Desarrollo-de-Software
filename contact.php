<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "pro_betsoft";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $mensaje);

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
