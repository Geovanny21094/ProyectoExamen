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
			<form class="crud" action="guardarProductos.php" method="POST">
				<table>
                    <tr>
                        <td class="etiqueta"><label for="lblCategoria"> Categoria: </label> </td>
                        <td><input type="text" name="categoria" placeholder="Escriba la categoria" id="lblCategoria"></td>
                    </tr>

    				<tr>
        				<td class="etiqueta"> <label for="lblNombre"> Nombre: </label> </td>
        		          <td> <input type="text" name="nombre" placeholder="Escriba el nombre *" id="lblNombre" > </td>
        			</tr>

        			<tr>
        				<td class="etiqueta"><label for="lblPrecio"> Precio: </label> </td>
        				<td><input type="text" name="precio" placeholder="Escriba el precio *" id="lblPrecio"></td>
        			</tr>

    				<tr>
        				<td class="etiqueta"><label for="lblStock"> Stock: </label> </td>
        				<td><input type="text" name="stock" placeholder="Escriba el stock *" id="lblStock"></td>
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