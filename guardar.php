<?php 	//conectar el servidor con la base de datos
include("conexion.php");
	//Recuperar variables del formulario
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO clientes VALUES('$cedula', '$nombre', '$apellido', '$edad', '$email', '$telefono', '$direccion')";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo insertar correctamente los datos";
	} else {
		header("Location: listadoClientes.php");;
	}
?>