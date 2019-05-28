<<<<<<< HEAD
<?php 	//conectar el servidor con la base de datos
	include("../../../config/conexion.php");
	//Recuperar variables del formulario
	
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO sucursales VALUES(0, '$nombre', '$direccion', '$telefono', 'N', null, null)";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo registrar la sucursal";
	} else {
		header("Location: ../../vista/usuario/listadoSucursales.php");
	}
=======
<?php 	//conectar el servidor con la base de datos
	include("../../../config/conexion.php");
	//Recuperar variables del formulario
	
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO sucursales VALUES(0, '$nombre', '$direccion', '$telefono', 'N', null, null)";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo registrar la sucursal";
	} else {
		header("Location: ../../vista/usuario/listadoSucursales.php");
	}
>>>>>>> 4571dd2bf1a601f06757ceb7d156e0051ec73f3d
?>