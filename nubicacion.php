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
	<title>UBICACION - Don Rafa</title>
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
		<td>IMAGEN AQUI</td>
		<td>Azuay - Via Paute - El Cab0</td>
	</tr>
</table>        
        </article>
    </section>
    
    </section>
	<footer>
		<h4><a href="index.php" title="Regresar al pagina principal">VOLVER A LA PAGINA DE INICIO</a></h4>
	</footer>
</body>
</html>