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
    <title>Cambiar Contraseña</title>
</head>
<body>
    <header>
    <h2><br>PASTELERÍA  "DULCE SECRETO"</h2><br>
    </header>
    <section class="principal">
        <div class="formulario">
            <h3>CAMBIAR CONTRASEÑA </h3>
            <?php
                    $id=$_REQUEST['id']; // <-- Creamos una variable de tipo REQUEST, guardara la variabla ID enviada desde el boton Actualizar
                    //conectar el servidor con la base de datos
                    include("../../../config/conexion.php");
                    //Se realiza la sentecia para eliminar el registros en la BD dada la condiciocn y ejecuta la consulta
                    $sql = "SELECT * FROM clientes WHERE cedula ='$id'";
                    $resultado = $conexion->query($sql);
                    $row = $resultado ->fetch_assoc(); // <-- imprime la fila de la consulta sql
            ?>
            
			<form class="crud" action="../../controladores/usuario/actualizarContrasena.php?id=<?php echo $row['cedula']; ?>" method="POST">
				<table>

                   <!--Recupera los datos de la BD e imprime los datos del registro selecionado dada la consulta sql-->
                    <tr>


                    <td class="etiqueta"><label for="cedula">Contraseña Actual (*)</label> </td>
                    <td><input type="password" id="contrasena1" name="contrasena1" value="" required placeholder="Ingrese su contraseña actual ..."/> </td>

                    </tr>

                    <tr>

                    <td class="etiqueta"><label for="cedula">Contraseña Nueva (*)</label> </td>
                    <td><input type="password" id="contrasena2" name="contrasena2" value="" required placeholder="Ingrese su contraseña nueva ..."/> </td>
                    </tr>


        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Cambiar Contraseña"></td>
                        </td>
        			</tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <h4><a href="listadoCuenta.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>