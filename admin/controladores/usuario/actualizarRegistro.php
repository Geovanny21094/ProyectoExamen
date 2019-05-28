<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario
	$id=$_REQUEST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE clientes SET nombre ='$nombre', apellido = '$apellido', edad = '$edad', 
email = '$email', telefono = 'telefono', direccion = '$direccion'
WHERE cedula='$id'";
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	header("Location: ../../vista/usuario/listadoClientes.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>