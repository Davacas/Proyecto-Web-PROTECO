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
		<style>
		html, body {
		height: 100%;
		margin: 0;
		padding: 0;
		}
		div#content {
		width: 100%; height: 100%;
		}
		</style>
	</head>
	<body bgcolor="#4F4F4F">
		<!--Scripts para inicializar-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		});
		</script>
		<script>
		function initMap() {
				var myLatLng = {lat: 24.1216396, lng: -110.2980366};
				var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 4,
				center: myLatLng
				});
				var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'Banco Profilia'
				});
				}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEbpzxlhY0fTv_cJmIOYNMXkgC20qHZ9A&signed_in=true&callback=initMap"></script>
<!--Navbar-->
		<div class="navbar-fixed" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif">
			<nav>
				<div class="nav-wrapper black white-text">
					<a href="index.php" class="brand-logo"><img src="img/logo_icon.png" style="height: 64%; width: 64%"></a>
					<a href="index.php" class="brand-logo" style="position: relative; margin-left: 75px">Banco Profilia</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="cuenta.php">Mi Cuenta</a></li>
						<li><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="comentarios.php">Comentarios</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="cuenta.php">Mi Cuenta</a></li>
            <li><a href="historia.php">Historia</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="comentarios.php">Comentarios</a></li>
            <li><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
<!--Texto-->
		<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 16pt; color: #EFEFEF">
			<div class="col s3">
				<img src="img/logo.png" style="height: 100%; width: 100%">
			</div>
			<div class="col s9">
				<h2 style="color: #AFAFAF">Por qué unirse a Banco Profilia</h2>
				<p>Banco Profilia es una empresa 100% mexicana respaldada con más de 3 semanas de experiencia en los servicios bancarios y más de un cliente satisfecho.</p>
				<p>Ofrecemos un excelente servicio y las mejores tarifas bancarias de México.</p>
				<p">¡Explora este sitio para aprender más sobre nosotros!, o bien:</p>
			</div>
		</div>
<!--VISÍTANOS-->
	<h3 style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; text-align: center; color: #AFAFAF;">¡Visítanos!</h3>
		<div class="row" style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif; font-size: 15pt; color: white">
			<div class="col s5 offset-l1" ><p>Estamos aquí:</p>
				<div id="map" style="height: 395px"></div>
			</div>
			<div class="col s5"> <p>Busca este edificio:</p>
				<img src="img/banco.jpg" style="height: 100%; width: 100%">
			</div>
		</div>
<p style="text-align: center; color: white"><b>Dirección: </b>Lateral los Planes #175 entre Bugambilias y Maravillas, C.P. 23055, colonia Jardines del Sur, La Paz, Baja California Sur, México.</p></div>

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