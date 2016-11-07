<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		session_start();
		$_SESSION['user'] = "gato";
		$_SESSION['nombre'] = "Toki";
		$_SESSION['fav_comida'] = "atún";
		$_SESSION['fav_juguete'] = "estambre";
		$_SESSION['imagen'] = "./img/neko.jpg";
		$_SESSION['info'] = "<p>El gato o gato doméstico (Felis silvestris catus) y coloquialmente llamado minino,3 micho,4 mizo5 o miz;6 es una subespecie de mamífero carnívoro de la familia Felidae. El gato está en convivencia cercana al ser humano desde hace unos 9500 años, periodo superior al estimado anteriormente, que oscilaba entre 3500 y 8000 años.<br><br>En las lenguas romances los nombres actuales más generalizados derivan del latín vulgar catus, palabra que aludía especialmente a los gatos salvajes en contraposición a los gatos domésticos que, en latín, eran llamados felis.<br><br>Hay docenas de razas, algunas sin pelo o incluso sin cola, como resultado de mutaciones genéticas y años de selección artificial, y existen en una amplia variedad de colores. Son depredadores por naturaleza, siendo sus presas potenciales más de cien especies diferentes de animales. Son capaces de asimilar algunos conceptos, y ciertos ejemplares han sido entrenados para manipular mecanismos simples.<br><br>Se comunican con gemidos, gruñidos y también con un centenar de diferentes vocalizaciones,8 además del lenguaje corporal.<p>";
		header('location: usuario.php');
	}
	else{
		header('location:./error.html');
	}

	exit();
?>