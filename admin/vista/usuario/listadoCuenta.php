 <!DOCTYPE html>
 <?php
    session_start();
    if(isset($_SESSION['usuario'])){
       // echo "sesion exitosa - bienvenido";
    }else{
        header("location: index.php");
    }

?>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estiloBlogs.css">
	<link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
	<link rel="stylesheet" type="text/css" href="../../../css/imagenes.css">
	<link rel="stylesheet" type="text/css" href="../../../css/estiloImagenes.css">
	<title>Lista de Registros</title>
</head>


<?php 
 	 //CONEXION A LA BASE DE DATOS
  	include("../../../config/conexion.php");
  	//RECUPERO EL CORREO DEL USUARIO INGRESADO
	$usuario=$_SESSION['usuario'];
	

	$sql="SELECT * FROM clientes WHERE email = '$usuario' ";
	

	 //Enviar una consulta MySQL
	$result=$conexion->query($sql); 
	  //Recupera una fila de resultados como un array asociativo
	$resultarr=mysqli_fetch_assoc($result);
	//Obtnemos el valo de una fila especifico
	$nombres = $resultarr["nombre"];
	$apellidos = $resultarr["apellido"];
	$nombreCompleto=$nombres. '  '.$apellidos;

?>

<body>
	<header>
			<div >
			<a id = "lateral2" href='../../../config/cerrarsesion.php' > CERRAR SESIÓN </a>

			</div>

		</div>
		<a  class="cajaloguito1"> <img src="../../../imagenes/fot.png"></a>
		</div>
		<nav>
			<ul><li><a href="listadoCuenta.php">INICIO</a></li></ul>
			<ul><li><a href="pedidoCliente.php">MI PEDIDO</a></li></ul>
			<ul><li><a href="listadoProductosClientes.php">LISTA PRODUCTOS</a></li></ul>

			<ul><li><a href="facturas.php">FACTURAS</a></li></ul>
		</nav>

	</header>
	
	<section class="principal">

		<div>

			<h3>MIS DATOS PERSONALES</h3>
			
			<div id="bloqueDatosUsuario">

			<Strong><p>BIENVENIDO :</strong> <?php echo $nombreCompleto ?> </p>
			
			</div>


	<div id = "lateral">
        
		<?php 
	   $imagen = $resultarr["imagen"];
	   $carpeta = "../../../imagenes/usuarios/"; 
	   $ruta= $carpeta . $imagen;     
	   ?>
			 <!--PARA COLOCAR LA IMAGEN DE NUESTRO USUARIO-->
   		<img  class="centrarImagen"src="<?php echo $ruta ?>" alt="" />

 		</div>



		
		<br>
		
		

		<br>
					
			<center>
			<form method="post" action="eliminadoMultiple.php">
			<table id= "tablaRegistros">
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Email</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Acciones</th>
			</tr>

			<?php
                				 
                $sql = "SELECT * FROM clientes WHERE email='$usuario'"; 
        
               
                $resultado = $conexion->query($sql); 
         
               
				// output data of each row
			    while($row = $resultado ->fetch_assoc()) { // <-- El bucle funcionara hasta que muestre todos los registros 
                     
			?>
			
			<tr>
				<!-- la variable row imprimira todos los valores de cada columna de la tabla de la base de datos -->
				<td><?php echo $row['cedula']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellido']; ?></td>
				<td><?php echo $row['edad']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['telefono']; ?></td>
				<td><?php echo $row['direccion']; ?></td>

				<!-- en los botones, al momento de hacer clic redirecciona a las paginas de actualizar y modificar
					y envia el ID de la tabla de registros asignado a una variablle llamada "id", en este caso es la cedula
				-->
				<td>
					<button id="btnEliminar" type="button" value="Eliminar" onclick = "location='eliminarCuenta.php?id=<?php echo $row['cedula']; ?>'">Eliminar</button>
					<button id="btnActualizar" type="button" value="Modificar" onclick = "location='modificarCuenta.php?id=<?php echo $row['cedula']; ?>'">Modificar</button>
					<button id="btnCambiarContrasena" type="button" value="Cambiar Contraseña" onclick = "location='cambiarContrasena.php?id=<?php echo $row['cedula']; ?>'">Cambiar Contraseña</button>

				</td>
				
			</tr>

			<?php
				} // <-- Aqui Cierra el bucle while
			?>
			</table>			

			<br>		
						
			
			</form>

		</center>
		</div>
	</section>

	<footer>
		<h4> Universidad  Politecnica Salesiana 2019</h4>
	</footer>
</body>
</html>