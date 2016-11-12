<?php
session_start();
if (!isset($_SESSION['nickname'])) {
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
			<div class="col s12 offset-l1 m4" off>
				<div class="card black darken-l">
					<div class="card-content white-text" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; font-size: 16pt; color: #EFEFEF">
						<span class="card-title" style="font-size: 20pt; font-weight: bold">Datos del usuario:</span>
						<br>
						<p><b>Usuario:	</b><?php echo $_SESSION['nickname'];?></p><br>
						<p><b>Nombre:		</b><?php echo $_SESSION['nombre'];?></p><br>
						<p><b>Correo:		</b><?php echo $_SESSION['email'];?></p><br>
						<p><b>Saldo Total: </b><?php
							include 'db.php';
							$saldo_total = 0;
							$pdo = Database::connect();
							$sql = 'SELECT saldo FROM Cuentas WHERE usuario=\''.$_SESSION['nickname'].'\'';
							foreach ($pdo->query($sql) as $row) {
							$saldo_total += $row['saldo'];
							}
							Database::disconnect();
							echo '$'.$saldo_total;
							?>
						</p>
					</div>
				</div>
				<a href="logoff.php" class="btn waves-effect waves-light col s8 offset-l2">Cerrar sesión</a>
			</div>

			<div class="col s12 m6" off style="text-align: center; color: white">
			<br>
				<h4>Cuentas disponibles:</h4>
				<table>

                    <thead>
                      <tr>
                        <th>Número de cuenta</th>
                        <th>Saldo Actual*</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i = 0;
                        $pdo = Database::connect();
                        $sql = 'SELECT * FROM Cuentas WHERE usuario=\''.$_SESSION['nickname'].'\'';
                        foreach ($pdo->query($sql) as $row) {
                      ?>
                      <tr>
                        <td>
                        <?php
                          echo $row['id_cuenta'];
                        ?>
                        </td>
                        <td>
                        <?php
                          echo '$'.$row['saldo'];
                        ?>
                        </td>
                        <td>
                          <div class="row">
                            <a href="transfer-form.php?no_cuenta=<?php echo $row['id_cuenta']?>" class="waves-effect waves-light btn btn-table blue lighten-2 modal-trigger col s9">Transferir</a>
                          </div>
                          <div class="row">
                            <a href="delete-confirm.php?no_cuenta=<?php echo $row['id_cuenta']?>" class="waves-effect waves-light btn btn-table deep-orange lighten-1 modal-trigger col s9">Eliminar</a>
                          </div>
                        </td>
                        <?php
                          }
                          Database::disconnect();
                        ?>
                      </tr>
                    </tbody>
                  </table>
                  <a href="create-account.php" class="waves-effect waves-light btn btn-table col s12">Crear una nueva cuenta</a><br>
                  <p style="font-size: 11px">*Para hacer un depósito o retiro en efectivo de su cuenta, por favor acuda a una de nuestras sucursales.</p>
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