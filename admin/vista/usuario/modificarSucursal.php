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
    <link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
    <link rel="stylesheet" type="text/css" href="../../../css/forma.css">
    <title>Actualizar Registro</title>
</head>
<body>
    <header>
    <a  class="cajaloguito2"> <img src="../../../imagenes/loguito.png"></a><br>	
        <h2><br>PASTELERIA "DULCE SECRETO"</h2><br>
    </header>
    <section class="principal">
        <div class="formulario">
            <h3>ACTUALIZAR REGISTRO DE SUCURSALES</h3>

			<?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("../../../config/conexion.php");
                    //Se realiza la sentecia para selecionar los registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM sucursales WHERE suc_codigo ='$id'"; 

                    $resultado = $conexion->query($sql);
                    $row=mysqli_fetch_assoc($resultado);
                    
                    $codigo=$row['suc_codigo'];
                    
                

                    ///$row = $resultado ->fetch_assoc(); // imprime la fila de la consulta sql



            ?>
            
        <form class="crud" action="../../controladores/usuario/actualizarSucursal.php?id=<?php echo $codigo ?>" method="POST">
			               
                <table>
                    <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->

                  

    				<tr>
        				<td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
        		          <td> <input type="text" name="nombre" id="lblNombre" value="<?php echo $row['suc_nombre']; ?>"> </td>
        			</tr>

        			

    				<tr>
        				<td class="etiqueta"><label for="lblDireccion"> Direccion: </label> </td>
        				<td><input type="text" name="direccion" id="lblDireccion" value="<?php echo $row['suc_direccion']; ?>"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
        				<td><input type="text" name="telefono" id="lblTelefono" value="<?php echo $row['suc_telefono']; ?>"></td>
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