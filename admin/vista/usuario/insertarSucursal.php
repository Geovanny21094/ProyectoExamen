 <!DOCTYPE html>
 
<html lang="es">
<head>
    <script language="JavaScript" type="text/javascript" src="./validaciones.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
    <title>Ingresar Producto Nuevo</title>
</head>
<body>
    <header>
    <h2>PASTELERÍA "DULCE SECRETO"</h2>
    </header>
    <section class="principal">
        <div>
            <h3>REGISTRAR NUEVA SUCURSAL</h3>
			<form class="crud" action="../../controladores/usuario/guardarSucursal.php" method="POST">
				<table>
                    <tr>
                        <td class="etiqueta"><label for="lblNombre"> Nombre: </label> </td>
                        <td><input type="text" name="nombre" placeholder="Escriba el nombre" id="lblNombre"></td>
                    </tr>

    				<tr>
        				<td class="etiqueta"> <label for="lblDireccion"> Direccion: </label> </td>
        		          <td> <input type="text" name="direccion" placeholder="Escriba la direccion *" id="lblDireccion" > </td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
        				<td><input type="text" name="telefono" placeholder="Escriba el telefono *" id="lblTelefono"></td>
        			</tr>

    				

    
        			   				
    				<tr height="15px"></tr>

        			<tr>
        				<td colspan="2" style="text-align:center">
                            <input type="submit" value="Crear">
                     	    <input type="reset" value="Cancelar">
                        </td>
        			</tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <h4><a href="listadoSucursales.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>