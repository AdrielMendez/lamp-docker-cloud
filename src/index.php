<?php
$mysqli = new mysqli("db", "user", "pass123", "mydb");

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
echo "LAMP con Docker en nube, proyecto ITCA FEPADE<br>";

$result = $mysqli->query("SELECT NOW() AS fecha;");
$row = $result->fetch_assoc();
echo "Fecha MySQL: " . $row['fecha'];
