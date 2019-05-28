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
    <link rel="stylesheet" type="text/css" href="./estilosGenerales.css">
    <title>Actualizar Registro</title>
</head>
<body>
    <header>
        <h2>Don Rafa</h2>
    </header>
    <section class="principal">
        <div class="formulario">
            <h3>ACTUALIZAR REGISTRO DE PRODUCTOS</h3>

			<?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("conexion.php");
                    //Se realiza la sentecia para selecionar los registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM producto WHERE pro_codigo ='$id'"; 

                    $resultado = $conexion->query($sql);
                    $row=mysqli_fetch_assoc($resultado);
                    
                    $codigo=$row['pro_codigo'];
                    
                    echo $codigo;

                    ///$row = $resultado ->fetch_assoc(); // imprime la fila de la consulta sql



            ?>
            
        <form class="crud" action="actualizarProducto.php?id=<?php echo $codigo ?>" method="POST">
			               
                <table>
                    <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->

                    <tr>
        				<td class="etiqueta"><label for="lblCategoria"> Categoria: </label> </td>
        				<td><input type="text" name="categoria" id="lblCategoria" value="<?php echo $row['pro_categoria']; ?>"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
        		          <td> <input type="text" name="nombre" id="lblNombre" value="<?php echo $row['pro_nombre']; ?>"> </td>
        			</tr>

        			

    				<tr>
        				<td class="etiqueta"><label for="lblPrecio"> Precio: </label> </td>
        				<td><input type="text" name="precio" id="lblPrecio" value="<?php echo $row['pro_precio']; ?>"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblStock"> Stock: </label> </td>
        				<td><input type="text" name="stock" id="lblStock" value="<?php echo $row['pro_stock']; ?>"></td>
        			</tr>

        		
        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Confirmar Cambios">
                            <input type="reset" value="Cancelar"></td>
        			</tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <h4><a href="listadoProductos.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>