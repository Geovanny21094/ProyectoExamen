 <!DOCTYPE html>
 
<html lang="es">
<head>
    <script language="JavaScript" type="text/javascript" src="./validaciones.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./estilosGenerales.css">
    <title>Ingresar Producto Nuevo</title>
</head>
<body>
    <header>
        <h2>Sweet</h2>
    </header>
    <section class="principal">
        <div>
            <h3>REGISTRAR PRODUCTOS NUEVOS</h3>
			<form class="crud" action="guardar.php" method="POST">
				<table>
                    <tr>
                        <td class="etiqueta"><label for="lblCedula"> Cedula: </label> </td>
                        <td><input type="text" name="cedula" placeholder="Escriba su DNI" id="lblCedula"></td>
                    </tr>

    				<tr>
        				<td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
        		          <td> <input type="text" name="nombre" placeholder="Escriba su Nombre *" id="lblNombre" > </td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblApellido"> Apellido: </label> </td>
        				<td><input type="text" name="apellido" placeholder="Escriba su apellido *" id="lblApellido"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblEdad"> Edad: </label> </td>
        				<td><input type="text" name="edad" placeholder="Escriba su edad *" id="lblEdad"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblEmail"> Email: </label> </td>
        				<td><input type="text" name="email" placeholder="Escriba su email *" id="lblEmail" ></td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblTelefono"> Telefono: </label> </td>
        				<td><input type="text" name="telefono" placeholder="Escriba su telefono*" id="lblTelefono" ></td>
        			</tr> 

                    <tr>
                        <td class="etiqueta"><label for="lblDireccion"> Direccion: </label> </td>
                        <td><input type="text" name="direccion" placeholder="Escriba su direccion *" id="lblDireccion" ></td>
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
                            <h4><a href="index.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>