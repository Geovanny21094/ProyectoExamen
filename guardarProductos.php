<?php 	//conectar el servidor con la base de datos
include("conexion.php");
	//Recuperar variables del formulario
	$categoria=$_POST['categoria'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$stock=$_POST['stock'];
	
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO producto VALUES(0, '$categoria', '$nombre', '$precio', '$stock', 'N', null, null)";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo insertar correctamente los datos";
	} else {
		header("Location: listadoProductos.php");;
	}
?>