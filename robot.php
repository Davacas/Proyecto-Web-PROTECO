<?php
session_start();
if (!isset($_SESSION['nickname'])) {
	header('location: ./index.php');
	exit();
}
else{
	session_unset();
	session_destroy();
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
</head>
<body bgcolor="#4F4F4F">
	<div class="row" style="position: relative; margin-top: 10%">
			<div class="col s12 offset-l2 m8" off>
				<div class="card black darken-l">
					<div class="card-content white-text" style="text-align: center">
						<h3>Consulte a su programador favorito.</h3>
					</div>
				</div>
			</div>
		</div>
</body>
</html>