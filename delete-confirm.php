<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BANCO PROFILIA</title>
  <link rel="icon" type="image/gif" href="img/logo.gif"/>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <div class="row">
    <div class="col offset-l2 l8">
      <div class="card grey darken-2">
        <div class="card-content white-text">
          <span class="card-title">Eliminar cuenta</span>
          <p>¿Está seguro que desea eliminar esta cuenta?</p>
          <p>Perderá todo el dinero que tenga almacenado en esta cuenta.</p>
        </div>
        <div class="card-action center">
          <form action="delete-account.php?no_cuenta=<?php echo $_GET['no_cuenta'];?>" method="POST">
          <button type="submit" class="btn">Sí</button>
          <a href="cuenta.php" class="waves-effect waves-light btn">No</a>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>