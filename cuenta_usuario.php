<!DOCTYPE html>
<?php
	session_start(); // <-- Inicia la Sesion
	// El if compara y sigue validado si el usuario es correcto 
	if(isset($_SESSION['usuario'])){
		//echo "<script>alert('Sesion Iniciada -Bienvenido')/<script>"; // <-- Si es correcto  se obtiene el valor de la sesion
	}else{
		header("location: index.php"); // <-- Si es Incorrecto no obtiene el valor de la sesion y redicciona al LOGIN
	}

?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./CSS/estiloBlogs.css">
	<link rel="stylesheet" type="text/css" href="./estilosGenerales.css">
	<title>Lista de Registros</title>
</head>

<body>
	<header>
		<div >
			<p>Bienvenido: <?php echo $_SESSION['usuario']; ?> </p>
		</div>

		<nav>
			<ul><li><a href="cuenta_usuario.php">MIS FACTURAS</a></li></ul>
			<ul><li><a href="pedido.php">REALIZAR PEDIDO</a></li></ul>
			<ul><li><a href="facturas.php">CARRITO</a></li></ul>
			<ul><li><a href="cerrarsesion.php" title="Cerrar Sesion">Cerrar Sesion</a></li></ul>
		</nav>
	</header>
	
	<section class="principal">

		<div>

			<h3>LISTA DE FACTURAS</h3>
	
		
		<br>
		
		<form action="cuenta_usuario.php" method="post">
			<input type="text" id="apellido" name="apellido" value="">
			<input type="submit"  name="1" value="Buscar" >
            <input type="submit"  name="2" value="Listar" >
		</form>
		 

		<br>
					
			<center>
			<form method="post" action="eliminadoMultiple.php">
			<table id= "tablaRegistros">
			<tr>
				<th># Factura</th>
				<th>Fecha</th>
				<th>Estado</th>
				<th>TOTAL</th>
				<th>Email</th>
			</tr>

			<?php
                
				include("conexion.php");
                if(isset($_POST[1])){
                   
                 //  $sql = "SELECT * FROM registros"; 
                $apellido = $_POST['apellido'];
                echo($apellido);
                $sql = "SELECT * FROM registros WHERE apellido='$apellido'"; 
                   
                }else{
                    
                  $sql = "SELECT * FROM registros"; 
                   
                }
                    $resultado = $conexion->query($sql); 
                // $sql = "SELECT * FROM registros"; 
                 // $sql = "SELECT * FROM registros WHERE cedula='$cedula'"; 
                if(isset($_POST[2])){
                  $sql = "SELECT * FROM registros";    
                }
               
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
				<td><button id="btnEliminar" type="button" value="Eliminar" onclick = "location='eliminar.php?id=<?php echo $row['cedula']; ?>'">Eliminar</button>
					<button id="btnActualizar" type="button" value="Modificar" onclick = "location='modificar.php?id=<?php echo $row['cedula']; ?>'">Modificar</button>
				</td>
				<td>
					<input type="checkbox" name="cedulasRegistros[]" value="<?php echo $row['cedula'] ?>">
				</td>
			</tr>

			<?php
				} // <-- Aqui Cierra el bucle while
			?>
			</table>			

		<br>		
						<table>
							<tr>
								<td><h4><a href="insertar.php" title="Ingresar nuevo registro">CREAR</a></h4></td>
								<td><input type="submit" name="delete" value="Borrado Multiple"></td>
							</tr>
						</table>
			
			</form>

		</center>
		</div>
	</section>

	<footer>
		<h4>Andres Usiña - Braulio Castro - (c) Universidad  Politecnica Salesiana 2018</h4>
	</footer>
</body>
</html>