<?php
  session_start();
  if(isset($_SESSION['nickname'])) {
    header('location: ./index.php');
    exit();
  }

  if ( !empty($_POST)) {
    $nicknameError = null;
    $nombreError = null;
    $emailError = null;
    $passwordError = null;
     
    $nickname = $_POST['nickname'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password1'];
    $password_conf = $_POST['password2'];
    $email = $_POST['email'];
     
    $valid = true;
    if (empty($nickname)) {
      $nicknameError = 'Insertar nickname';
      $valid = false;
    }
    
    if (empty($nombre)) {
      $nombreError = 'Insertar nombre';
      $valid = false;
    }

    if (empty($password)) {
      $passwordError = 'Insertar password';
      $valid = false;
    }

    if ($password != $password_conf) {
      $passwordconfError = 'Las contraseñas ingresadas no coinciden';
      $valid = false; 
    }
     
    if (empty($email)) {
      $emailError = 'Insertar email';
      $valid = false;
    }
     
    if ($valid) {

      require 'db.php';
      
      $pdo = Database::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO Usuarios (nickname,nombre,email,password) values(?,?,?,?)";
      $q = $pdo->prepare($sql);
      $q->execute(array($nickname,$nombre,$email,$password));
      Database::disconnect();
      header('location: ./success.php');
      exit();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <title>BANCO PROFILIA</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="icon" type="image/gif" href="img/logo.gif"/>
  </head>
  
 <body bgcolor="#4F4F4F">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.modal-trigger').leanModal();
      });
    </script>
    <style type="text/css">
    li:hover a{
      color: #999;
    }
    </style>
    <main>
<div class="navbar-fixed" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif">
      <nav>
        <div class="nav-wrapper black white-text">
          <a href="index.php" class="brand-logo"><img src="img/logo_icon.png" style="height: 64%; width: 64%"></a>
          <a href="index.php" class="brand-logo" style="position: relative; margin-left: 75px">Banco Profilia</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="historia_pobres.php">Historia</a></li>
            <li><a href="servicios_pobres.php">Servicios</a></li>
            <li><a href="clientes_pobres.php">Clientes</a></li>
            <li><a href="comentarios_pobres.php">Comentarios</a></li>
            <li><a href="about_pobres.php">About Us</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="historia_pobres.php">Historia</a></li>
            <li><a href="servicios_pobres.php">Servicios</a></li>
            <li><a href="clientes_pobres.php">Clientes</a></li>
            <li><a href="comentarios_pobres.php">Comentarios</a></li>
            <li><a href="about_pobres.php">About Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
<!--Suscribete-->
<div class="row">
  <div class="col s12 offset-l3 m6" off>
    <div class="card black darken-l">
      <div class="card-content white-text">
        <span class="card-title" style="text-align: center" ><h3>Registro de usuarios</h3></span>
        <p style="text-align: center">Por favor, llene los siguientes campos:</p>
        <form class="col l12" action="register.php" method="POST">
          <div class="input-field col l10 offset-l1">
            <input id="nombre" type="text" class="validate" name="nombre"<?php if(!empty($_POST['nombre'])) { echo ' value="'.$_POST['nombre'].'"'; } ?>>
            <?php if (!empty($nombreError)) { echo '<span class="red-text">'.$nombreError.'</span>'; } ?>
            <label for="nombre">Nombre Completo</label>
          </div>
          <div class="input-field col l10 offset-l1">
            <input id="nickname" type="text" class="validate" name="nickname" <?php if(!empty($_POST['nickname'])) { echo ' value="'.$_POST['nickname'].'"'; } ?>>
            <?php if (!empty($nicknameError)) { echo '<span class="red-text">'.$nicknameError.'</span>'; }?>
            <label for="nickname">Nickname</label>
          </div>
          <div class="input-field col l10 offset-l1">
            <input id="password1" type="password" class="validate" name="password1">
            <?php if (!empty($passwordError)) { echo '<span class="red-text">'.$passwordError.'</span>'; }?>
            <label for="password1">Contraseña</label>
          </div>
          <div class="input-field col l10 offset-l1">
            <input id="password2" type="password" class="validate" name="password2">
            <?php if (!empty($passwordconfError)) { echo '<span class="red-text">'.$passwordconfError.'</span>'; }?>
            <label for="password2">Confirmar contraseña</label>
          </div>
          <div class="input-field col l10 offset-l1">
            <input id="email" type="email" class="validate" name="email"<?php if(!empty($_POST['email'])) { echo ' value="'.$_POST['email'].'"'; } ?>>
            <?php if (!empty($emailError)) { echo '<span class="red-text">'.$emailError.'</span>'; } ?>
            <label for="email">Correo electrónico</label>
          </div>
        </div>
        <div class="row center">
          <button class="btn waves-effect waves-light darken-2" type="submit" name="action">Registrarse</button>
        </div>
        <br>
      </form>
    </div>
  </div>
</main>
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