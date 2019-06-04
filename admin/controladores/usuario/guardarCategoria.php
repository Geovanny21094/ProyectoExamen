<?php 	//conectar el servidor con la base de datos
include("../../../config/conexion.php");
	//Recuperar variables del formulario

	$nombre=$_POST['nombre'];

	
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO pro_categoria VALUES(0, '$nombre')";
	

	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo insertar correctamente los datos";
	} else {
		header("Location: ../../vista/usuario/listadoProductos.php");
	}
?>