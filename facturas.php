<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="./CSS/estiloFacturas.css">
	<link rel="stylesheet" type="text/css" href="./CSS/jquery-ui.min.css">
	<script language="JavaScript" type="text/javascript" src="./javaScripts/jquery.js"></script>
	<script language="JavaScript" type="text/javascript" src="./javaScripts/jquery-ui.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="./javaScripts/datapicker.js"></script>
	<script language="JavaScript" type="text/javascript" src="./javaScripts/funcionesFactura.js"></script>
	<meta charset="UTF-8">
	<title>Facturas en java Script</title>
</head>
<body onLoad="obtenerFechaActual(document.getElementById('fechaActual'))">
	 <header>
 		<h2> FACTURAS DON-RAFA</h2>
 	 </header>

 	 <section>
 	 	<article>
			<form action="" name="facturass">

				<table width="100%" border="2" cellspacing="2" bgcolor="LightGray">
	     		
							
	     		<tr>
	    			  <td colspan="6" align="center">FACTURA</td> 
    			</tr>

    			<tr>
					<td>Cliente</td>
					<td><input type="text" name="fac_cliente"></td>
					<td>Telefono</td>
					<td><input type="text" name="fac_telefono"></td>
					<td>Email</td>
					<td><input type="text" name="fac_email"></td>
					<td>Telefono</td>
					<td><input type="text" name="fac_telefono"></td>
				</tr>
				<tr>
					<td>Direcion</td>
					<td><input type="text" name="fac_direccion"></td>
					<td>Fecha</td>
					<td><input type="text" id="fechaActual" name="fechaActual" disabled></td>
					<td>Pago</td>
					<td><input type="text" name="fac_pago"></td>
					<td>Estado</td>
					<td><input type="text" name="fac_estado"></td>
				</tr>
				
							
				</table> <br>
				
				<div id="bloqueDetalleFac">
				<table id="tablaDetalleFac" width="100%" border="2" cellspacing="2" bgcolor="LightGray">
	     		
	     			<!--<tr> <td colspan="4" align="center">DETALLE DE LA FACTURA</td> </tr> -->
		
					<tr>
						<td>DESCRIPCION DEL PRODUCTO</td>
						<td>PRECIO UNITARIO</td>
						<td>CANTIDAD</td>
						<td>PRECIO TOTAL</td>
					</tr>
				
					<tr>
						<td><input type="text" placeholder="Ingrese su producto" id="descripcionProducto"></td>
						<td><input type="text" name="precioUnitario"></td>
						<td><input type="text" name="cantidad" ></td>
						<td><input type="text" name="precioTotal" disabled></td>
					</tr>
					
				
				</table>
				</div> <br>
			
				
				<table 	width="450x" border="2" cellspacing="2" bgcolor="LightGray" >
	     				
					<tr>
						
						<td>Subtotal</td>
						<td><input type="text" id="lblSubtotal" disabled></td>
						<td><input type="text" id="pctSubtotal" value="88%" disabled></td>
					</tr>
					
					<tr>
						
						<td>Iva</td>
						<td><input type="text" id="lblIVA" disabled></td>
						<td><input type="text" id="psIVA" value="12%" disabled></td>
					</tr>

					<tr>
						
						<td>Total</td>
						<td><input type="text" id="lblTotal" disabled></td>
						<td><input type="text" id="pctTotal" value="100%" disabled></td>
					</tr>
				</table>
				
			
				<br>
				<div id="bloqueBoton">
				<input type="button" value="Calcular" onclick="calculos()" >
				<input type="button" value="Añadir Producto" onclick="agregarFila()">
				<input type="button" value="Eliminar Producto" onclick="eliminarFila()">
				</div>
 	 		</form>
 	 	</article>
 	 </section>

 	 <footer>
 	 	<p>Universidad Politecnica Salesiana - Andres Usiña, Braulio Castro - (c) 2018</p>
 	 </footer>
	
</body>
</html>



