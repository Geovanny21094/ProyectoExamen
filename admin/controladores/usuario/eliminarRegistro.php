<<<<<<< HEAD
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
     header("Location: ../../vista/usuario/listadoClientes.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

=======
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
     header("Location: ../../vista/usuario/listadoClientes.php");
} else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

>>>>>>> 4571dd2bf1a601f06757ceb7d156e0051ec73f3d
?>