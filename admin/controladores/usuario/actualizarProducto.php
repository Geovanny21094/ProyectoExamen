<<<<<<< HEAD
<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	
	$categoria=$_POST['categoria'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$stock=$_POST['stock'];
	//$direccion=$_POST['direccion'];
	
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE producto SET pro_categoria = '$categoria', pro_nombre ='$nombre', pro_precio = '$precio', 
pro_stock = '$stock' 
WHERE pro_codigo='$id'";
//cho ($sql);
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	
	header("Location: ../../vista/usuario/listadoProductos.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

=======
<?php
//conectar el servidor con la base de datos
include("../../../config/conexion.php");
//Recuperar variables del formulario

	$id=$_GET['id'];
	
	$categoria=$_POST['categoria'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$stock=$_POST['stock'];
	//$direccion=$_POST['direccion'];
	
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE producto SET pro_categoria = '$categoria', pro_nombre ='$nombre', pro_precio = '$precio', 
pro_stock = '$stock' 
WHERE pro_codigo='$id'";
//cho ($sql);
//Ejecutar la sentencia sql y verificar la ejecucion
if ($conexion->query($sql) === TRUE) {
	
	header("Location: ../../vista/usuario/listadoProductos.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

>>>>>>> 4571dd2bf1a601f06757ceb7d156e0051ec73f3d
?>