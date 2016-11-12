<?php
	session_start();
		if (!isset($_SESSION['nickname'])) {
			header('location: comentarios_pobres.php');
			exit();
		}
		else{
			  require 'db.php';

    if ( !empty($_POST)) {
    $mensajeError = null;

    $mensaje = $_POST['mensaje'];
     
    $valid = true;

    if (empty($mensaje)) {
      $mensajeError = 'Insertar un mensaje';
      $valid = false;
    }
     
    if ($valid) {
      
      $pdo = Database::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO Comentarios (nombre,email,mensaje) values(?,?,?)";
      $q = $pdo->prepare($sql);
      $q->execute(array($_SESSION['nickname'],$_SESSION['email'],$mensaje));
      Database::disconnect();
      header('location: ./comentarios.php');
      exit();
    }
  }
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
<!--Hacer comentario-->
<div class="row" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 14pt; color: #EFEFEF">
		<div class="offset-l1 col s6">
			<br>
			<div class="input-field col l12">
				<form method="POST" action="comentarios.php">
					<textarea id="mensaje" class="materialize-textarea" name="mensaje"<?php if(!empty($_POST['mensaje'])) { echo ' value="'.$_POST['mensaje'].'"'; } ?>></textarea>
					<label for="mensaje">Escribe tu comentario:</label>
					<?php if (!empty($mensajeError)) { echo '<span class="red-text bold-text">'.$mensajeError.'</span>'; } ?>
				</div>
				<div class="row center">
					<button class="btn waves-effect waves-light" type="submit" name="action">Comentar</button>
				</div>
			</form>
<!--Comentarios-->
 <ul class="collection with-header">
    <li class="collection-header black darken-1 white-text "><h5>Comentarios de nuestros clientes:</h5></li>
    <?php

      $pdo = Database::connect();
      $sql = 'SELECT * FROM Comentarios';
      foreach ($pdo->query($sql) as $row) {
    ?>
    <li class="collection-item grey">
      <?php
        echo '<span style="font-weight: bold">'.$row['nombre'].'</b> comentó:</span>'.'<br>';
        echo '<span class="mensaje flow-text" style="font-size: 12pt">'.$row['mensaje'].'</span><br>';
        echo '<span class="black-text comment-date" style="position: relative; margin-left: 70%; font-size: 10pt">'.$row['fecha'].'</span><br>';
      ?>
    </li>
    <?php
        }
        Database::disconnect();
      ?>
  </ul>
		</div>
<!--Twitter-->
	<div class="col s4">
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