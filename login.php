<?php
	if ( !isset($_POST['user']) || !isset($_POST['password'])) 	{
		header('location:./error.html');
	}
	elseif ($_POST['user'] == 'Davacas' && $_POST['password'] == 'proteco123') {
		session_start();
		$_SESSION['user'] = "Davacas";
		$_SESSION['nombre'] = "Daniel Vargas";
		$_SESSION['correo'] = "danielbond09@hotmail.com";
		$_SESSION['telefono'] = "6121390515";
		header('location: index_chidos.php');
	}
	else {
		header('location:./error.html');
	}
	exit();
?>