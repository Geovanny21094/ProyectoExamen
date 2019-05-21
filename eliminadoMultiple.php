<?php
//conectar el servidor con la base de datos
include("conexion.php");
//Verificamos si el boton de eliminacion multiple fue presionado
if(isset($_POST['delete'])){

	$checkarr = $_POST['cedulasRegistros'];// <-- Se guarda en una varibale un arreglo de "checkboxs" selecionados del formulario
/*	
	if(empty($_POST['cedulasRegistros'])){
		header("Location: listado.php");
		echo"<script>alert('No se ha seleccionado ningun Registro')</script>";
	} else{
*/
	foreach ($checkarr as $idborrar) { // <-- Bucle recorre todos los elemenetos que tenga el arreglo delos checkboxs selecnadios y asigna a una nueva variable

//Se realiza la sentecia para eliminar las variables en la BD dada una condicion
		$sql = "DELETE FROM clientes WHERE cedula='$idborrar'";
//Ejecutar la sentencia sql y verificar la ejecucion
		if ($conexion->query($sql) === TRUE) {
		    echo "Registros eliminados exitosamente";
		} else {
		    echo "Error en eliminacion de registro: " . $conexion->error;
		}

	}
	header("Location: listadoClientes.php");
}

mysql_close($conexion);
?>