<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	$categoria=$_POST['categoria'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$stock=$_POST['stock'];
	
	date_default_timezone_set("America/Guayaquil"); 
	$fecha = date('Y-m-d H:i:s', time()); 
	

//Se realiza la sentecia para eliminar los registros en la BD
$sql = "   UPDATE producto " . 
"SET pro_eliminado = 'S' ," . 
"pro_fecha_modificacion = '$fecha' " . 
"WHERE pro_codigo = '$id' "; 

echo $sql;

//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	header("Location: ../../vista/usuario/listadoProductos.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}


?>

