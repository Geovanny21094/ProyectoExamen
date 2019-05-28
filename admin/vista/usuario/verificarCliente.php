<?php
//INICIO DE SESION
session_start();
include("../../../config/conexion.php");
$usu=$_POST['usuario'];
$con=$_POST['password'];

// CONSULTA SQL DE LA TABLA USUARIOS EN LA BASE DE DATOS: Verifica si el usuario a logear es correcto
$sql = "SELECT * FROM clientes WHERE email ='$usu' and contrasena = '$con'";
echo $sql;
$result = $conexion->query($sql);

if ($result->num_rows > 0){
    $row=$result->fetch_assoc();
    $_SESSION['usuario']=$row['email'];
    $_SESSION['logueado']="true";
    header("Location: listadoClientes.php");
	
}else{
    header("Location: index.php");
}

$conexion->close();

?>