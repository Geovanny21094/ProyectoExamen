<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../../css/estilosGenerales.css">
	<link rel="stylesheet" type="text/css" href="../../../css/forma.css">

	<title>Login</title>
</head>
<body>

	<header>
	<a  class="cajaloguito2"> <img src="../../../imagenes/loguito.png"><br></a> 
		<h2><br>ADMINISTRACIÓN</h2><br>
		
	</header>
	
	<section class= "principal">

		<div>
			<h3>INICIO DE SESION</h3>
				<form id="cuadroLogin" action="../../controladores/usuario/verificarusuario.php" method="post">
					
					<table >
						<tr>
							<td>Administrador:</td>
							<td><input type="text" id="usuario" name="usuario" placeholder="Ingrese su correo de administrador *"></td>
						</tr>
						<tr>
							<td>Contraseña:</td>
							<td><input type="password" name="password" placeholder="Ingrese su contraseña *" ></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center"><input type="submit" name="ingresar" value="Ingresar" ></td>
						</tr>

						
			
					</table>
				</form>
		</div>
	</section>

	<footer>
		<p>Universidad Politecnica Salesiana 2019 </p>
	</footer>
</body>
</html>