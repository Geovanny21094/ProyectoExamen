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
	<title>Lista de Registros</title>
</head>

<body>
	<header>
		<div >
			<p>Bienvenido: <?php echo $_SESSION['usuario']; ?> </p>

			<p><a href="../../../config/cerrarsesion.php" title="Cerrar Sesion" >Cerrar Sesion</a></p>
			
		</div>

		<nav>
			<ul><li><a href="listadoClientes.php">CLIENTES</a></li></ul>
			
			<ul><li><a href="listadoProductos.php">PRODUCTOS</a></li></ul>  <!-- CODIGO AÑADIDO y archivo LISTADO PRODUCTOS-->
			<ul><li><a href="listadoSucursales.php">SUCURSALES</a></li></ul>  <!-- CODIGO AÑADIDO y archivo LISTADO PRODUCTOS-->

			<ul><li><a href="pedido.php">PEDIDOS</a></li></ul>
			
			<ul><li><a href="facturas.php">CARRITO</a></li></ul>
			<ul><li><a href="facturas.php">FACTURAS</a></li></ul>
			
		</nav>
	</header>
	
	<section class="principal">

		<div>

			<h3>LISTA DE CLIENTES</h3>
			
			
		
		<br>
		
		<form action="listado.php" method="post">
			<input type="text" id="apellido" name="apellido" value="">
			<input type="submit"  name="1" value="Buscar" >
            <input type="submit"  name="2" value="Listar" >
		</form>
		 

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
				
			

			<?php
                
				include("../../../config/conexion.php");
                if(isset($_POST[1])){
                   
                 //  $sql = "SELECT * FROM registros"; 
                $apellido = $_POST['apellido'];
                echo($apellido);
                $sql = "SELECT * FROM clientes WHERE apellido='$apellido'"; 
                   
                }else{
                    
                  $sql = "SELECT * FROM clientes"; 
                   
                }
                    $resultado = $conexion->query($sql); 
                // $sql = "SELECT * FROM registros"; 
                 // $sql = "SELECT * FROM registros WHERE cedula='$cedula'"; 
                if(isset($_POST[2])){
                  $sql = "SELECT * FROM clientes";    
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
		<h4>Universidad  Politecnica Salesiana 2019</h4>
	</footer>
</body>
</html>