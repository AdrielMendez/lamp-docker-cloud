<?php
$host = "db4free.net";
$user = "itca2025";
$pass = "Itca123!";
$db   = "proyectoitca";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión MySQL exitosa desde Render usando db4free.net!";
?>

echo "LAMP con Docker en nube, proyecto ITCA FEPADE<br>";

$result = $mysqli->query("SELECT NOW() AS fecha;");
$row = $result->fetch_assoc();
echo "Fecha MySQL: " . $row['fecha'];
