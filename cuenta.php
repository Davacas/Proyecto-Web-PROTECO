<?php
session_start();
if (!isset($_SESSION['user'])) {
header('location: ./index.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/materialize.css">
		<link rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" type="image/gif" href="img/logo.gif"/>
		<title>BANCO PROFILIA</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</head>
	<body bgcolor="#4F4F4F">
		<!--Scripts para inicializar-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.js"></script>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			$(".button-collapse").sideNav();
			});
		</script>
		<style type="text/css">
		li.active a{
			background-color: #aaa;
			font-weight: bold;
			color: black;
		}
		li:hover a{
			color: #999;
		}
		</style>
<!--Navbar-->
		<div class="navbar-fixed" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif">
			<nav>
				<div class="nav-wrapper black white-text">
					<a href="index_chidos.php" class="brand-logo"><img src="img/logo_icon.png" style="height: 64%; width: 64%"></a>
					<a href="index_chidos.php" class="brand-logo" style="position: relative; margin-left: 75px">Banco Profilia</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li class="active"><a href="cuenta.php">Mi Cuenta</a></li>
						<li><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="comentarios.php">Comentarios</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li class="active"><a href="cuenta.php">Mi Cuenta</a></li>
					      <li><a href="historia.php">Historia</a></li>
					      <li><a href="servicios.php">Servicios</a></li>
					      <li><a href="clientes.php">Clientes</a></li>
					      <li><a href="comentarios.php">Comentarios</a></li>
					      <li><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col s12 offset-l1 m5" off>
				<div class="card black darken-l">
					<div class="card-content white-text" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 16pt; color: #EFEFEF">
					<span class="card-title" style="font-size: 20pt; font-weight: bold">Datos de su cuenta:</span>
					<br>
						<p><b>Usuario: </b><?php echo $_SESSION['user'];?></p><br>
						<p><b>Nombre: </b><?php echo $_SESSION['nombre'];?></p><br>
						<p><b>Correo: </b><?php echo $_SESSION['correo'];?></p><br>
						<p><b>Teléfono: </b><?php echo $_SESSION['telefono'];?></p>
					</div>
				</div>
			</div>
			<div class="col s12 m5" off style="text-align: center; color: white">
				<h4>¿Deseas realizar alguna modificación en tu cuenta?</h4>
				<a class="waves-effect waves-light btn" style="width: 100%">Actualizar mis datos</a><br><br>
				<a class="waves-effect waves-light btn" style="width: 100%">Depositar a otro usuario</a><br><br>
				<a class="waves-effect waves-light btn" href="logoff.php" style="width: 100%">Cerrar sesión</a><br><br><br>
				<a class="waves-effect waves-light btn red">Eliminar mi cuenta</a><br><br>
			</div>
		</div>
<!--Footer-->
<footer class="page-footer black" style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif;">
<div class="container">
	<div class="row">
		<div class="col l7 s12">
			<h5 class="white-text">Contáctanos personalmente:</h5>
			<p class="grey-text text-lighten-4"><b>Dirección: </b>Lateral los Planes #175 e/Bugambilias y Maravillas, C.P. 23055, colonia Jardines del Sur, La Paz, Baja California Sur, México.</p>
			<p class="grey-text text-lighten-4"><b>Teléfono: </b>(612)-123-5813</p>
			<p class="grey-text text-lighten-4"><b>E-mail :</b>directoalspam@gmail.com</p>
		</div>
		<div class="col l4 offset-l1 s12">
			<ul>
				<br><br><li><a href="https://twitter.com/BancoProfilia" class="grey-text text-lighten-3" target="blank">¡Síguenos en Twitter!</a></li>
				<br><li><a href="https://twitter.com/quejasdemonnie" class="grey-text text-lighten-3" target="blank">¡Sigue al diseñador de este sitio en Twitter!</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer-copyright">
	<div class="container"><i ></i>© 2016 Copyright</div>
</div>
</footer>
</body>
</html>