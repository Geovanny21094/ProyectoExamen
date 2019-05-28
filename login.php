<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./estilosGenerales.css">
	<title>Login</title>
</head>
<body>

	<header>
		<h2>SISTEMA DE GESTION DE PERSONAS</h2>
	</header>
	
	<section class= "principal">

		<div>
			<h3>INICIO DE SESION</h3>
				<form id="cuadroLogin" action="verificarusuario.php" method="post">
					
					<table >
						<tr>
							<td>Usuario</td>
							<td><input type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario"></td>
						</tr>
						<tr>
							<td>Contraseña</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center"><input type="submit" name="ingresar" value="Ingresar"></td>
						</tr>

						<tr>
							<td colspan="2" style="text-align:center"><h4><a href="insertar.php" title="Ingresar nuevo registro">REGISTRATE</a></h4></td>
						</tr>
					
					</table>
				</form>
		</div>
	</section>

	<footer>
		<p>Andres Usiña, Braulio Castro - Universidad Politecnica Salesiana 2018 (c) </p>
	</footer>
</body>
</html>