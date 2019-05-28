<?php
$servername = "localhost";
$username = "root";
$password = '';
$baseDatos = 'pasteleria_db';
// Crear la conexion con mysql
$conexion = new mysqli($servername, $username, $password, $baseDatos);
// Verificar la conexion
if ($conexion->connect_error) {
    die("conexion fallida: " . $conexion->connect_error);
}
//echo "Conexion Exitosa";
?> 