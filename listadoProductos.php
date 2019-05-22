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
	<link rel="stylesheet" type="text/css" href="./CSS/estiloBlogs.css">
	<link rel="stylesheet" type="text/css" href="./estilosGenerales.css">
	<title>Lista de Registros</title>
</head>

<body>
	<header>
		<div >
			<p>Bienvenido: <?php echo $_SESSION['usuario']; ?> </p>
			<p><a href="cerrarsesion.php" title="Cerrar Sesion">Cerrar Sesion</a></p>
		</div>

		<nav>
			<ul><li><a href="listadoClientes.php">CLIENTES</a></li></ul>
			
			<ul><li><a href="listadoProductos.php">LISTA PRODUCTOS</a></li></ul>  <!-- CODIGO AÑADIDO y archivo LISTADO PRODUCTOS-->
			<ul><li><a href="insertarProductos.php">INGRESAR PRODUCTOS</a></li></ul>  <!-- CODIGO AÑADIDO y archivo LISTADO PRODUCTOS-->

			<ul><li><a href="pedido.php">PEDIDOS</a></li></ul>
			
			<ul><li><a href="facturas.php">CARRITO</a></li></ul>
			<ul><li><a href="facturas.php">SUCURSALES</a></li></ul>

		</nav>
	</header>
	
	<section class="principal">

		<div>

			<h3>LISTA DE PRODUCTOS</h3>
			
			<div id="bloqueDatosUsuario">
			<p>Bienvenido: <?php echo $_SESSION['usuario']; ?> </p>
			<h4><a href="cerrarsesion.php" title="Cerrar Sesion">Cerrar Sesion</a></h4>
			</div>
		
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
				<th>Categoria</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Stock</th>
				<th>Acciones</th>
				<th>Borr. Multiple</th>
			</tr>

			<?php
                
				include("conexion.php");
                if(isset($_POST[1])){
                   
                 //  $sql = "SELECT * FROM registros"; 
                $descripcion = $_POST['pro_descripcion'];
                echo($descripcion);
                $sql = "SELECT * FROM producto WHERE pro_descripcion='$descripcion'"; 
                   
                }else{
                    
                  $sql = "SELECT * FROM producto"; 
                   
                }
                    $resultado = $conexion->query($sql); 
                // $sql = "SELECT * FROM registros"; 
                 // $sql = "SELECT * FROM registros WHERE cedula='$cedula'"; 
                if(isset($_POST[2])){
                  $sql = "SELECT * FROM producto";    
                }
               
				// output data of each row
			    while($row = $resultado ->fetch_assoc()) { // <-- El bucle funcionara hasta que muestre todos los registros 
                     
			?>
			
			<tr>
				<!-- la variable row imprimira todos los valores de cada columna de la tabla de la base de datos -->
				<td><?php echo $row['pro_categoria']; ?></td>
				<td><?php echo $row['pro_nombre']; ?></td>
				<td><?php echo $row['pro_precio']; ?></td>
				<td><?php echo $row['pro_stock']; ?></td>
			

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