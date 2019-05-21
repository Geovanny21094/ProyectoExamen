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
            <h3>ACTUALIZAR REGISTRO</h3>

			<?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("conexion.php");
                    //Se realiza la sentecia para selecionar los registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM clientes WHERE cedula ='$id'";
                    $resultado = $conexion->query($sql);
                    $row = $resultado ->fetch_assoc(); // imprime la fila de la consulta sql
            ?>
            
        <form class="crud" action="actualizarRegistro.php?id=<?php echo $row['cedula']; ?>" method="POST">
			               
                <table>
                    <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->
    				<tr>
        				<td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
        		          <td> <input type="text" name="nombre" id="lblNombre" value="<?php echo $row['nombre']; ?>"> </td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblApellido"> Apellido: </label> </td>
        				<td><input type="text" name="apellido" id="lblApellido" value="<?php echo $row['apellido']; ?>"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblEdad"> Edad: </label> </td>
        				<td><input type="text" name="edad" id="lblEdad" value="<?php echo $row['edad']; ?>"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblEmail"> Email: </label> </td>
        				<td><input type="text" name="email" id="lblEmail" value="<?php echo $row['email']; ?>"></td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
        				<td><input type="text" name="telefono" id="lblTelefono" value="<?php echo $row['telefono']; ?>" ></td>
        			</tr> 

                    <tr>
                        <td class="etiqueta"><label for="lblDireccion"> Direccion: </label> </td>
                        <td><input type="text" name="direccion" id="lblDireccion" value="<?php echo $row['direccion']; ?>"></td>
                    </tr> 

        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Confirmar Cambios">
                            <input type="reset" value="Cancelar"></td>
        			</tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <h4><a href="listadoClientes.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>