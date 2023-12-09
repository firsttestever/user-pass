<?php
// Conexión a la base de datos
$servername = "sql10.freesqldatabase.com";
$username = "sql10669010"; // Tu nombre de usuario de MySQL
$password = "BVS49K5iRr"; // Tu contraseña de MySQL
$dbname = "sql10669010"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$newUsername = $_POST['new_username'] ?? '';
$newPassword = $_POST['new_password'] ?? '';

// Insertar nuevo usuario en la base de datos
$sql = "INSERT INTO usuarios (username, password) VALUES ('$newUsername', '$newPassword')";

if ($conn->query($sql) === TRUE) {
    echo "¡Usuario creado exitosamente!";
} else {
    echo "Error al crear el usuario: " . $conn->error;
}

$conn->close();
?>
