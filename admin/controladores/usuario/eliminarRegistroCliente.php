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
//Se realiza la sentecia para eliminar los registros en la BD
$sql = "DELETE FROM clientes WHERE cedula='$id'";
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	 header("Location: ../../../public/vista/");
	 
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>