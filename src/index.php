<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

echo "✅ Conexión MySQL exitosa en Render usando variables de entorno!";
echo "LAMP con Docker en nube, proyecto ITCA FEPADE<br>";

$result = $mysqli->query("SELECT NOW() AS fecha;");
$row = $result->fetch_assoc();
echo "Fecha MySQL: " . $row['fecha'];
?>



