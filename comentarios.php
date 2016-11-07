<?php
session_start();
if (!isset($_SESSION['user'])) {
header('location: comentarios_pobres.php');
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
						<li><a href="cuenta.php">Mi Cuenta</a></li>
						<li><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li class="active"><a href="comentarios.php">Comentarios</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="cuenta.php">Mi Cuenta</a></li>
					      <li><a href="historia.php">Historia</a></li>
					      <li><a href="servicios.php">Servicios</a></li>
					      <li><a href="clientes.php">Clientes</a></li>
					      <li class="active"><a href="comentarios.php">Comentarios</a></li>
					      <li><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
<!--Servicios-->
	<!--Servicio1-->
<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF">
	<div class="offset-l1 col s5">
	<br>
		<ul class="collection with-header black darken-l">
        <li class="collection-header black"><h5><b>Comentarios de nuestros clientes:</b></h5></li>
        <li class="collection-item black"><h5>Monnie dice:</h5><p>Estafa total. Lo único que sirve de este banco es su sitio web.</p>
        </li>
        <li class="collection-item black"><h5>Davacas dice:</h5><p>Hubiera sido mejor usar mi dinero para prender una fogata.</p>
        </li>
        <li class="collection-item black"><h5>Satanás dice:</h5><p>Olvídenlo. Está de la verga.</p>
        </li>
        <li class="collection-item black"><h5>Elver dice:</h5><p>Podría ser peor, podría estar muerto.</p>
        </li>
        <li class="collection-item black"><h5>Satanás dice:</h5><p>¡Excelente servicio! Soy miembro desde hace 6 horas y todo va de maravilla.</p>
        </li>
      </ul>
	</div>
	<div class="col s5">
		<br>
		<h5><b>Actividad reciente en Twitter:</b></h5>
		<a class="twitter-timeline" href="https://twitter.com/BancoProfilia">Tweets by BancoProfilia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
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