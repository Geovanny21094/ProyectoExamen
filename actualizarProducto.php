<?php
//conectar el servidor con la base de datos
include("conexion.php");
//Recuperar variables del formulario
	$id=$_REQUEST['pro_codigo'];
	$categoria=$_POST['pro_categoria'];
	$nombre=$_POST['pro_nombre'];
	$precio=$_POST['pro_precio'];
	$stock=$_POST['pro_stock'];
	$direccion=$_POST['direccion'];
	
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE producto SET pro_categoria = '$categoria', pro_nombre ='$nombre', pro_precio = '$precio', 
pro_stock = '$stock' 
WHERE pro_codigo='$id'";
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
     header("Location: listadoProductos.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

?>