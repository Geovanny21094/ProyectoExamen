<?php
//INICIO DE SESION
session_start();
include("../../../config/conexion.php");
$usu=$_POST['usuario'];
$con=$_POST['password'];

// CONSULTA SQL DE LA TABLA USUARIOS EN LA BASE DE DATOS: Verifica si el usuario a logear es correcto
$sql = "SELECT * FROM usuario WHERE usuario ='$usu' and password = '$con'";
$result = $conexion->query($sql);

if ($result->num_rows > 0){
    $row=$result->fetch_assoc();
    $_SESSION['admin']=$usu;
    $_SESSION['logueado']="true";
    header("Location: ../../vista/usuario/listadoClientes.php");
	
}else{
    header("Location: ../../vista/usuario/login.php");
}

$conexion->close();


?>