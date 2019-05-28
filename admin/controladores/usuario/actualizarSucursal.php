<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	
	
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	//$direccion=$_POST['direccion'];
	
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE sucursales SET suc_nombre = '$nombre', suc_direccion ='$direccion', suc_telefono = '$telefono' 
WHERE suc_codigo='$id'";
//cho ($sql);
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	
    header("Location: ../../vista/usuario/listadoSucursales.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>