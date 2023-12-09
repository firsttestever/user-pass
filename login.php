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
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Realizar la verificación en la base de datos
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "¡Inicio de sesión exitoso!";
} else {
    echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>
