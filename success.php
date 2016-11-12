<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BANCO PROFILIA</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="icon" type="image/gif" href="img/logo.gif"/>
</head>
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
 <body bgcolor="#4F4F4F">
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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <div class="row">
    <div class="col l6 offset-l3">
      <div class="card black darken-2">
        <div class="card-content white-text" style="text-align: center">
          <span class="card-title center">¡Operación exitosa!</span><br>
          <span>A partir de este momento puedes iniciar sesión con el nickname y contraseña que creaste.</span>
        </div>
        <div class="card-action center">
          <a href="index.php" class="waves-effect waves-light btn">Regresar a la página principal</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>