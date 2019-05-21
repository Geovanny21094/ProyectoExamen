<!DOCTYPE html>
<?php
	session_start(); // <-- Inicia la Sesion
	// El if compara y sigue validado si el usuario es correcto 
	if(isset($_SESSION['usuario'])){
		//echo "<script>alert('Sesion Iniciada -Bienvenido')/<script>"; // <-- Si es correcto  se obtiene el valor de la sesion
	}else{
		header("location: index.php"); // <-- Si es Incorrecto no obtiene el valor de la sesion y redicciona al LOGIN
	}

?>
<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./CSS/estiloBlogs.css">
	<title>NetCaus - Inicio</title>
</head>

<body>
	<header>
		<h2>NUESTROS PRODUCTOS</h2>
	</header>

	<section class="principal">
        <section class="acerca_DE">


            <article>
       <table width="600px" border="2" cellspacing="2" bgcolor="LightGray">
	     
	<tr>
	      <td colspan="3" align="center">NUESTOS PRODUCTOS</td> 
    </tr>
		
	<tr>
		<td>RACKS</td>
		<td><img src="imagenes/racks.png" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $100</td>
	</tr>
			
	<tr>
		<td>Router</td>
		<td><img src="imagenes/router.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $80</td>
	</tr>

	<tr>
		<td>Servidor Blade</td>
		<td><img src="imagenes/servidor_blade.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $5598</td>
	</tr>

	<tr>
		<td>PC INTEL i7</td>
		<td><img src="imagenes/pc_intel_i7.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $1200</td>
	</tr>

	<tr>
		<td>Impresora</td>
		<td><img src="imagenes/impresora.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $60</td>
	</tr>
	
	<tr>
		<td>Telefono Cisco</td>
		<td><img src="imagenes/telefono_cisco.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $40</td>
	</tr>

	<tr>
		<td>Switch Cisco</td>
		<td><img src="imagenes/switch_cisco.jpg" alt="racks" border="0" width="140" height="100"></td>
		<td>PRECIO: $120</td>
	</tr>

</table>        
        </article>
    </section>
    
    </section>
	<footer>
		<h4><a href="pagemain.php" title="Regresar al pagina principal">VOLVER A LA PAGINA DE INICIO</a></h4>
	</footer>
</body>
</html>