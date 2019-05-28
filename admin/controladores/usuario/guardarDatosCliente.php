<?php 	//conectar el servidor con la base de datos
include("../../../config/conexion.php");
	//Recuperar variables del formulario
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$contrasena=$_POST['contrasena'];
	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO clientes VALUES(0,'$cedula', '$nombre', '$apellido', '$edad', '$email', '$telefono', '$direccion','$contrasena')";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo insertar correctamente los datos";
	} else {
		///echo"BIENVENIDO NUEVO USUARIO";

		header("Location: ../../vista/usuario/loginCliente.php");;
	}
?>