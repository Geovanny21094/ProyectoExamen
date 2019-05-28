<?php
	session_start();
	session_destroy();	// <-- DESTRUYE LA SESION EN TODAS LAS PAGINAS DONDE SE HAYA INICIADO LA SESION

	header("location: 	../public/vista/"); //<-- Redirecciona a la pagina inicial de LOGIN
 ?>