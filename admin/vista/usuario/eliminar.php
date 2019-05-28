<<<<<<< HEAD
 <!DOCTYPE html>
 <?php
    session_start();
    if(isset($_SESSION['usuario'])){
     //   echo "sesion exitosa - bienvenido";
    }else{
        header("location: index.php");
    }

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
    <link rel="stylesheet" type="text/css" href="../../../css/forma.css">
    <title>ELiminar Registro</title>
</head>
<body>
    <header>
    <a  class="cajaloguito2"> <img src="../../../imagenes/loguito.png"><br></a>
        <h2><br>PASTELERÍA  DULCE SECRETO</h2><br>
    </header>
    <section class="principal">
        <div class="formulario">
            <h3>ELIMINAR REGISTRO</h3>
            <?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("../../../config/conexion.php");
                    //Se realiza la sentecia para eliminar el registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM clientes WHERE cedula ='$id'";
                    $resultado = $conexion->query($sql);
                    $row = $resultado ->fetch_assoc(); // <-- imprime la fila de la consulta sql
            ?>
            
			<form class="crud" action="../../controladores/usuario/eliminarRegistro.php?id=<?php echo $row['cedula']; ?>" method="POST">
				<table>
                   <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->
                    <tr>
                        <td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
                          <td> <input disabled type="text" name="nombre" id="lblNombre" value="<?php echo $row['nombre']; ?>"> </td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblApellido"> Apellido: </label> </td>
                        <td><input disabled type="text" name="apellido" id="lblApellido" value="<?php echo $row['apellido']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblEdad"> Edad: </label> </td>
                        <td><input disabled type="text" name="edad" id="lblEdad" value="<?php echo $row['edad']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblEmail"> Email: </label> </td>
                        <td><input disabled type="text" name="email" id="lblEmail" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
                        <td><input disabled type="text" name="telefono" id="lblTelefono" value="<?php echo $row['telefono']; ?>" ></td>
                    </tr> 

                    <tr>
                        <td class="etiqueta"><label for="lblDireccion"> Direccion: </label> </td>
                        <td><input disabled type="text" name="direccion" id="lblDireccion" value="<?php echo $row['direccion']; ?>"></td>
                    </tr> 

        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Eliminar"></td>
                        </td>
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
=======
 <!DOCTYPE html>
 <?php
    session_start();
    if(isset($_SESSION['usuario'])){
     //   echo "sesion exitosa - bienvenido";
    }else{
        header("location: index.php");
    }

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
    <link rel="stylesheet" type="text/css" href="../../../css/forma.css">
    <title>ELiminar Registro</title>
</head>
<body>
    <header>
    <a  class="cajaloguito2"> <img src="../../../imagenes/loguito.png"><br></a>
        <h2><br>PASTELERÍA  DULCE SECRETO</h2><br>
        
    </header>
    <section class="principal">
        <div class="formulario">
            <h3>ELIMINAR REGISTRO</h3>
            <?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("../../../config/conexion.php");
                    //Se realiza la sentecia para eliminar el registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM clientes WHERE cedula ='$id'";
                    $resultado = $conexion->query($sql);
                    $row = $resultado ->fetch_assoc(); // <-- imprime la fila de la consulta sql
            ?>
            
			<form class="crud" action="../../controladores/usuario/eliminarRegistro.php?id=<?php echo $row['cedula']; ?>" method="POST">
				<table>
                   <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->
                    <tr>
                        <td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
                          <td> <input disabled type="text" name="nombre" id="lblNombre" value="<?php echo $row['nombre']; ?>"> </td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblApellido"> Apellido: </label> </td>
                        <td><input disabled type="text" name="apellido" id="lblApellido" value="<?php echo $row['apellido']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblEdad"> Edad: </label> </td>
                        <td><input disabled type="text" name="edad" id="lblEdad" value="<?php echo $row['edad']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblEmail"> Email: </label> </td>
                        <td><input disabled type="text" name="email" id="lblEmail" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                        <td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
                        <td><input disabled type="text" name="telefono" id="lblTelefono" value="<?php echo $row['telefono']; ?>" ></td>
                    </tr> 

                    <tr>
                        <td class="etiqueta"><label for="lblDireccion"> Direccion: </label> </td>
                        <td><input disabled type="text" name="direccion" id="lblDireccion" value="<?php echo $row['direccion']; ?>"></td>
                    </tr> 

        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Eliminar"></td>
                        </td>
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
>>>>>>> 0c5d6c0137f205f05f7f7f37778ffddaf496d52b
</html>