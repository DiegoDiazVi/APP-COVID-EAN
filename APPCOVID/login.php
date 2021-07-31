<!DOCTYPE html>
<html>
<title>Login</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="imagen/icon.png" rel="icon" type="image/x-icon">
  <link rel="stylesheet" href="css/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<h1><center>APP COVID</center></h1>
<h2><center>Bienvenido</center></h2>
<center>
<form action="appvalida.php" method="post" style="width: 32rem;">
  <div class="imgcontainer" style="width: 30rem;">
    <img src="imagen/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container" style="width: 30rem;">
    <label for="usuario"><b>Usuario:</b></label>
    <input type="text" class="form-control" placeholder="Ingrese usuario" name="usuario" required>

    <label for="password"><b>Contraseña:</b></label>
    <input type="password" class="form-control" placeholder="Entrar contraseña" name="password" required>

    <button type="submit" name="enviar" value="LOGIN">INGRESAR</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Recordarme
    </label>
  </div>



  <div class="container" style="width: 30rem;">
    <a class="btn btn-warning" href="registrar.php" role="button">REGISTRARSE</a>
    <a class="btn btn-danger" href="index.php" role="button">CERRAR</a>
    <span class="psw">Olvidaste <a href="#">contraseña?</a></span>
  </div>
</form></center>

</body>
</html>
