<<<<<<< HEAD
<?php
	session_start();
	session_destroy();	// <-- DESTRUYE LA SESION EN TODAS LAS PAGINAS DONDE SE HAYA INICIADO LA SESION

	header("location: 	../public/vista/"); //<-- Redirecciona a la pagina inicial de LOGIN
=======
<?php
	session_start();
	session_destroy();	// <-- DESTRUYE LA SESION EN TODAS LAS PAGINAS DONDE SE HAYA INICIADO LA SESION

	header("location: 	../public/vista/"); //<-- Redirecciona a la pagina inicial de LOGIN
>>>>>>> 4571dd2bf1a601f06757ceb7d156e0051ec73f3d
 ?>