<?php
session_start();
if (!isset($_SESSION['user'])) {
header('location: historia_pobres.html');
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
						<li class="active"><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="comentarios.php">Comentarios</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="cuenta.php">Mi Cuenta</a></li>
            <li class="active"><a href="historia.php">Historia</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="comentarios.php">Comentarios</a></li>
            <li><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
<!--Texto-->
		<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF">
			<div class="offset-l1 col s7">
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit unde in, vel laudantium rem animi sequi id nesciunt natus beatae voluptatem quasi hic, voluptatibus magni quas. Laborum ad, sequi, hic voluptate cumque ratione accusantium, pariatur ducimus nulla dignissimos recusandae sapiente iure labore nesciunt ipsa, quisquam saepe officia magni. Officiis fugiat vero accusantium quasi, odio neque consectetur reiciendis saepe autem ad, odit recusandae, rem quisquam fugit. Dolor dolorem praesentium quia ea veritatis quod a fugit, esse, odio, quam repellat sapiente possimus qui non nulla laborum. Dignissimos facilis deleniti perferendis, minus neque voluptatibus dolore eveniet aut assumenda obcaecati quidem distinctio aspernatur incidunt nisi totam quaerat dolor vitae reiciendis odio eum. Nostrum aspernatur quos quae, nobis voluptatem. </p>
			</div>
			<div class="col s3">
				<br><br>
				<img src="img/banco.jpg" style="height: 100%; width: 100%">
			</div>
		</div>
		<div class="row">
			<div class="offset-l1 col s10">
				<p style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF; text-align: justify;">delectus quasi quam, optio quis laboriosam accusantium possimus magni iste earum repellendus. Quae, ad maiores incidunt, exercitationem ullam ratione, ab repellat blanditiis impedit nihil laboriosam hic dolor placeat, doloribus voluptates. Quae iure cum voluptatum placeat dolor nostrum expedita delectus necessitatibus explicabo distinctio modi eveniet eligendi saepe ullam nisi, natus veritatis optio perspiciatis hic sapiente debitis, nam? Libero sit dicta, delectus omnis! Repellat a quidem, dolorem nostrum quas. Eum, cupiditate. Alias dignissimos quae, eum non laudantium ipsam in vel laboriosam placeat dolor, repellendus est vitae beatae sequi.</p>
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