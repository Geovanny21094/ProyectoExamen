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
	<link rel="stylesheet" type="text/css" href="../../../css/forma.css">
	<link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
	<link rel="stylesheet" type="text/css" href="../../../css/imagenes.css">
	<link rel="stylesheet" type="text/css" href="../../../css/estiloImagenes.css">
	<script type="text/javascript"  src="../../../js/agregarProductoCarrito.js"></script>


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

<?php 
 	 //CONEXION A LA BASE DE DATOS
  	include("../../../config/conexion.php");
  	//RECUPERO EL CORREO DEL USUARIO INGRESADO
	$usuario=$_SESSION['usuario'];
	
	//echo $usuario;

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

		<div >
			
			<a  class="cajaloguito1"> <img src="../../../imagenes/fot.png"></a>
			
		
			
		</div>

		<nav >
		<ul><li><a href="listadoCuenta.php">INICIO</a></li></ul>
			<ul><li><a href="pedidoCliente.php">MI CARRITO</a></li></ul>
			<ul><li><a href="listadoProductosClientes.php">LISTA PRODUCTOS</a></li></ul>

			<ul><li><a href="facturas.php">FACTURAS</a></li></ul>

		</nav>
	</header>
	
	<section class="principal">
		


<div>

<h3>CLIENTE</h3>

<div id="bloqueDatosUsuario">

<Strong><p>BIENVENIDO :</strong> <?php echo $nombreCompleto ?> </p>

	</div>


<div id = "lateral">

<?php 
$imagen = $resultarr["imagen"];
$carpeta = "../../../imagenes/usuarios/";  
$ruta= $carpeta . $imagen; 
//echo $ruta;	

?>
<!--PARA COLOCAR LA IMAGEN DE NUESTRO USUARIO-->
<img  class="centrarImagen" src="<?php echo $ruta ?>" alt="" />

</div>




<br>
<br>
<br>
<br>
<br>
<br>


<h3>PRODUCTOS </h3>

<br>
		
		<form action="listado.php" method="post">
			<input type="text" id="apellido" name="apellido" value="">
			<input type="submit"  name="1" value="Buscar" >
			<!--

<input type="submit"  name="2" value="Listar" >
			-->
			
			
		</form>
		 

		<br>
					
			<center>
			<form method="post" action="eliminadoMultiple.php">
			<table id= "tablaRegistros">
			<tr>
			<th>Codigo</th>
				<th>Categoria</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Stock</th>
				<th>Imagen</th>
				<th>Comprar</th>

			
			</tr>

			<?php
                
				include("../../../config/conexion.php");
        
                $sql = "SELECT * FROM producto where pro_eliminado='N'"; 
                   
                
                $resultado = $conexion->query($sql); 
             
               
				// output data of each row
			    while($row = $resultado ->fetch_assoc()) { // <-- El bucle funcionara hasta que muestre todos los registros 
                     
			?>
			
			<tr>
				<!-- la variable row imprimira todos los valores de cada columna de la tabla de la base de datos -->
				<td><?php echo $row['pro_codigo']; ?></td>
				<td><?php echo $row['pro_categoria']; ?></td>
				<td><?php echo $row['pro_nombre']; ?></td>
				<td><?php echo $row['pro_precio']; ?></td>
				<td><?php echo $row['pro_stock']; ?></td>
				
				
				
				<?php 
				$imagen = $row['pro_imagen']; 
				
				$carpeta = "../../../imagenes/productos/";  
				$ruta= $carpeta . $imagen; 
				?>
				<td><img src=<?php echo $ruta  ?>></td>
				
				
				<!-- en los botones, al momento de hacer clic redirecciona a las paginas de actualizar y modificar
					y envia el ID de la tabla de registros asignado a una variablle llamada "id", en este caso es la cedula
				-->
				
				<td>
					
				<input style="width:50px;height:15px"  	id="cantidad" type="text" name="cantidad" placeholder="# "  >
					
				<button id="btnActualizar" type="button" value="Modificar" onclick="agregarProductoCarrito()">Agregar al Carrito</button>
				

				

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