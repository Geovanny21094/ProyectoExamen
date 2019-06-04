 <!DOCTYPE html>
 <?php
    session_start();
    if(isset($_SESSION['admin'])){
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
	$usuario=$_SESSION['admin'];
	//echo $usuario;

	$sql="SELECT * FROM usuario WHERE usuario = '$usuario' ";

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

<h3>ADMINISTRADOR</h3>

<div id="bloqueDatosUsuario">

<Strong><p>BIENVENIDO :</strong> <?php echo $nombreCompleto ?> </p>

	</div>


<div id = "lateral">

<?php 
$imagen = $resultarr["imagen"];
$carpeta = "../../../imagenes/administradores/";  
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
<h3>SUCURSALES </h3>
<p><a href="insertarSucursal.php" style="color:black;">Ingresar nueva sucursal</a></p>  <!-- CODIGO AÑADIDO y archivo LISTADO PRODUCTOS-->
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
			
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Acciones</th>
				
			</tr>

			<?php
                
				include("../../../config/conexion.php");
            
                $sql = "SELECT * FROM sucursal_pasteleria  where suc_eliminado ='N'" ; 
                   
                $resultado = $conexion->query($sql); 

          
				// output data of each row
			  while($row = $resultado ->fetch_assoc()) { // <-- El bucle funcionara hasta que muestre todos los registros 
                     
			?>
			
			<tr>
				<!-- la variable row imprimira todos los valores de cada columna de la tabla de la base de datos -->
				
				<td><?php echo $row['suc_nombre']; ?></td>
				<td><?php echo $row['suc_direccion']; ?></td>
				<td><?php echo $row['suci_telefono']; ?></td>
				

				<!-- en los botones, al momento de hacer clic redirecciona a las paginas de actualizar y modificar
					y envia el ID de la tabla de registros asignado a una variablle llamada "id", en este caso es la cedula
				-->
				<td><button id="btnEliminar" type="button" value="Eliminar" onclick = "location='eliminarSucursal.php?id=<?php echo $row['suc_codigo']; ?>'">Eliminar</button>
					<button id="btnActualizar" type="button" value="Modificar" onclick = "location='modificarSucursal.php?id=<?php echo $row['suc_codigo']; ?>'">Modificar</button>
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