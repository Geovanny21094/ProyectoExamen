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
<body>
	 <header>
 		<h2> Pedido</h2>
 	 </header>

 	 <section>
 	 	<article>
			<form action="" name="facturass">

							
				<div id="bloqueDetalleFac">
				<table id="tablaDetalleFac" width="100%" border="2" cellspacing="2" bgcolor="LightGray">
	     		
	     			<!--<tr> <td colspan="4" align="center">DETALLE DE LA FACTURA</td> </tr> -->
		
					<tr>

						<th>Seleccion Multiple</th>
						<td>DESCRIPCION DEL PRODUCTO</td>
						<td>PRECIO UNITARIO</td>
						<td>CANTIDAD</td>
						<td>SUBTOTAL</td>
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
						
						<td>Total</td>
						<td><input type="text" id="lblTotal" disabled></td>
						<td><input type="text" id="pctTotal" value="100%" disabled></td>
					</tr>
				</table>
				
			
				<br>
				<div id="bloqueBoton">
				<input type="button" value="Generar Factura" onclick="calculos()" >
				</div>
 	 		</form>
 	 	</article>
 	 </section>

 	 <footer>
 	 	<p>Universidad Politecnica Salesiana - Andres Usiña, Braulio Castro - (c) 2018</p>
 	 </footer>
	
</body>
</html>



