<?php
session_start();
if (isset($_SESSION['nickname'])) {
header('location: about.php');
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
						<li><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="comentarios.php">Comentarios</a></li>
						<li class="active"><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
					      <li><a href="historia.php">Historia</a></li>
					      <li><a href="servicios.php">Servicios</a></li>
					      <li><a href="clientes.php">Clientes</a></li>
					      <li><a href="comentarios.php">Comentarios</a></li>
					      <li class="active"><a href="about.php">About Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
<!--Suscribete-->
<div class="row">
			<div class="col s12 offset-l4 m4" off>
				<div class="card black darken-l">
					<div class="card-content white-text" style="text-align: center">
						<span class="card-title" >¿Ya eres miembro?</span>
						<form action="login.php" method="POST">
							<div class="input-field col l10 offset-l1" style="text-align: left">
                  <input id="nickname" type="text" class="validate" name="nickname">
                  <label for="nickname">Nickname</label>
                </div>
							<div class="input-field col l10 offset-l1" style="text-align: left">
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">Contraseña</label>
                </div>
							<button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión</button>
						</form>
						<br>
						<form>
							<span class="card-title" >¿Aún no lo eres?</span><br>
							<a class="waves-effect waves-light btn" href="register.php">¡Hazte miembro!</a><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
<!--Servicios-->
<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF; text-align: justify;">
	<div class="offset-l1 col s10">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel maiores eum molestiae repudiandae deleniti, velit vitae quo illo consequuntur quidem suscipit enim architecto exercitationem molestias voluptas quibusdam, saepe quas. Ducimus ratione esse, deleniti dolor, nihil commodi. Tempora distinctio modi repellat aperiam dolorum impedit at fuga error, eligendi id, ab quae tempore debitis nemo facilis, repudiandae unde quam officia magni! Eaque ab dolore assumenda, sapiente, nostrum fuga ullam earum vitae quibusdam similique tenetur omnis libero ipsum. Culpa iste officia nesciunt, aliquid, laborum facilis, itaque quae excepturi veniam non odio provident reiciendis inventore, laboriosam illo tempore magnam sint consectetur qui? Nulla, repellat!</p>
	</div>
	</div>	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
		});
	</script>
	<div class="parallax-container">
				<div class="parallax">
					<img src="img/prebes.jpg">
				</div>
			</div>
			<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF; text-align: justify;">
	<div class="offset-l1 col s10">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel maiores eum molestiae repudiandae deleniti, velit vitae quo illo consequuntur quidem suscipit enim architecto exercitationem molestias voluptas quibusdam, saepe quas. Ducimus ratione esse, deleniti dolor, nihil commodi. Tempora distinctio modi repellat aperiam dolorum impedit at fuga error, eligendi id, ab quae tempore debitis nemo facilis, repudiandae unde quam officia magni! Eaque ab dolore assumenda, sapiente, nostrum fuga ullam earum vitae quibusdam similique tenetur omnis libero ipsum. Culpa iste officia nesciunt, aliquid, laborum facilis, itaque quae excepturi veniam non odio provident reiciendis inventore, laboriosam illo tempore magnam sint consectetur qui? Nulla, repellat!</p>
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