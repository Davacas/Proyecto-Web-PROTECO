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
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/materialize.css">
		<link rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" type="image/gif" href="img/logo.gif"/>
		<title>BANCO PROFILIA</title>
	<title>Autenticación</title>
</head>
<body bgcolor="#4F4F4F">
	<div class="row" style="position: relative; margin-top: 20%">
			<div class="col s12 offset-l4 m4" off>
				<div class="card black darken-l">
					<div class="card-content white-text" style="text-align: center">
						<div id="cuadro"> Click aquí comprobar que no eres un robot.</div>
					</div>
				</div>
			</div>
		</div>
</body>
<script type="text/javascript">
		document.getElementById("cuadro").onclick = function(){
			//document.write(usuario);
			var ope1 = Math.floor((Math.random() * 9) + 1);
			var ope2 = Math.floor((Math.random() * 9) + 1);
			var opc = Math.floor((Math.random() * 3) + 1);
			var resultado;
			if (opc == 1){
		        var usuario = prompt("¡Pruébanos que no eres un robot! \n ¿Cuál es el resultado de: "+ope1+" + "+ope2+" ?");
		        resultado = ope1 + ope2;
		    }
			else if (opc == 2){
			    var usuario = prompt("¡Pruébanos que no eres un robot! \n ¿Cuál es el resultado de: "+ope1+" - "+ope2+" ?");
			    resultado = ope1 - ope2;
			}
			else{
			    var usuario = prompt("¡Pruébanos que no eres un robot! \n ¿Cuál es el resultado de: "+ope1+" × "+ope2+" ?");
			    resultado = ope1 * ope2;
			}
			//document.write(aleatorio);
			if(usuario == null){
				alert("No jugaste.");
				window.location.href = 'robot.php';
			}
			else if (resultado == usuario){
				alert("¡Correcto! Disculpe las molestias, puede proseguir.");
				window.location.href = 'index.php';
			}
			else{
				alert("Su resultado fue incorrecto.");
				window.location.href = 'robot.php';
			}
		}
	</script>
</html>