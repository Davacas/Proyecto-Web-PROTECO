<?php
session_start();
if (isset($_SESSION['nickname'])) {
header('location: clientes.php');
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
						<li><a href="historia.php">Historia</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li class="active"><a href="clientes.php">Clientes</a></li>
						<li><a href="comentarios.php">Comentarios</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
					      <li><a href="historia.php">Historia</a></li>
					      <li><a href="servicios.php">Servicios</a></li>
					      <li class="active"><a href="clientes.php">Clientes</a></li>
					      <li><a href="comentarios.php">Comentarios</a></li>
					      <li><a href="about.php">About Us</a></li>
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
	<!--Servicio1-->
<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF">
	<div class="offset-l1 col s3">
	<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF">
  <br>
    <ul class="collection with-header black z-depth-1">
              <li class="collection-header black lighten-3"> <h5><b>Miembros activos:</b></h5></li>
              <?php
                include 'db.php';
                $pdo = Database::connect();
                $sql = 'SELECT nickname FROM Usuarios';
                foreach ($pdo->query($sql) as $row) {
                  echo '<li class="collection-item grey">'.$row['nickname'].'</li>';
                }
              ?>
           </ul>
  </div>
	</div>
	<div class="col s7">
		<h3><b>¡Muchas gracias!</b></h3>
		<p style="text-align: justify;">Gracias a todos ustedes, Banco Profilia ha logrado posicionarse en el mercado, por lo que seguiremos comprometidos en brindarles un excelente servicio además de todos los beneficios que usted ya conoce (si no los conoce, haga clic en la pestaña de servicios). </p>
		<img src="img/clientes.jpg" style="height: 100%; width: 100%">
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