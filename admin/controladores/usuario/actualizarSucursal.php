<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	
	
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];

	date_default_timezone_set("America/Guayaquil"); 
	$fecha = date('Y-m-d H:i:s', time()); 

	//$direccion=$_POST['direccion'];
	
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE sucursal_pasteleria SET suc_nombre = '$nombre', suc_direccion ='$direccion', suci_telefono = '$telefono' ,suc_fecha_modificacion = '$fecha' 
WHERE suc_codigo='$id'";
//cho ($sql);
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	
    header("Location: ../../vista/usuario/listadoSucursales.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>