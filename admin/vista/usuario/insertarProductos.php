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
            <h3>REGISTRAR PRODUCTOS NUEVOS</h3>
			<form class="crud" action="../../controladores/usuario/guardarProductos.php" method="POST" enctype="multipart/form-data" >
				<table>

                    <tr>
	
					<?php
					 	 //CONEXION A LA BASE DE DATOS
  					include("../../../config/conexion.php");
					$sql="SELECT * FROM pro_categoria order by cat_nombre ";
					$result=$conexion->query($sql);  
					?>

					Categorias : <select name="cbx_estado" id="cbx_estado">

					<option value="0">Seleccionar Categorí<a href=""></a></option>
					<?php 
					while($row = $result->fetch_assoc()) 
					{
					?>
					<option value="<?php echo $row['cat_nombre']; ?>"  >    <?php echo $row['cat_nombre']; ?>   </option>


					<?php 
					} 
					?>
					</select></div>
					<br />
					   
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

                    <tr>

					<td class="etiqueta"><label for="archivo">Imagen: </label></td>
					 <td><input type="file" id="imagen" name="imagen"  /></td>

					 
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
                            <h4><a href="listadoProductos.php" title="Regresar pagina Anterior">VOLVER</a></h4>
                        </td>
                    </tr>
				</table>
			</form>
		</div>
    </section>
</body>
</html>