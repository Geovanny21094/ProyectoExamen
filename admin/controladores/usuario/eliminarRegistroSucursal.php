<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	
	
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
//Se realiza la sentecia para eliminar los registros en la BD
$sql = "DELETE FROM sucursales WHERE suc_codigo='$id'";
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
    header("Location: ../../vista/usuario/listadoSucursales.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>