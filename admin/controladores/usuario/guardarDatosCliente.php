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
	$contr=MD5($contrasena);


	// Recibo los datos de la imagen
$nombre_img=$_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/Proyecto_Pasteleria/imagenes/usuarios/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
  if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
}

	//Se realiza la sentecia para guardar las varibales en la BD
	$sql="INSERT INTO clientes VALUES(0,'$cedula', '$nombre', '$apellido', '$edad', '$email', '$telefono', '$direccion','$contr','$nombre_img','N', null, null)";
	//Ejecutar la sentencia sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificar la ejecucion
	if(!$ejecutar){
		echo"ERROR: No se pudo insertar correctamente los datos";
	} else {
		echo"BIENVENIDO NUEVO USUARIO";
		header("Location: ../../vista/usuario/loginCliente.php");;
	}
?>