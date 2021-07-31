<!DOCTYPE html>
<html>
<title>Bienvenido - APP COVID</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="imagen/icon.png" rel="icon" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
  <!-- Navbar  -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="imagen/imagen1.png"  width="90" height="50">
        <a class="navbar-brand">APP COVID</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a >Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registrar.php"><span class="glyphicon glyphicon-user"></span> Registrase</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>
  <!-- Columna -->
  <div class="jumbotron text-center">
    <h1>Bienvenido a APP COVID</h1>
    <img src="imagen/ean.png" width="230" height="130">
    <p>Esta es una pagina web donde podras realizar: </p>
  </div>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="imagen/caro1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="imagen/caro2.jpg" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="imagen/caro3.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Registrarte</h3>
        <p>En esta pagina podras registrarte
        y poder acceder a los formularios para
        ingresar una propuesta.</p>
      </div>
      <div class="col-sm-4">
        <h3>Ingresar una propuesta</h3>
        <p>En este caso podras registrart
        la propuesta que creas conveniente
        para la reactivación económica
        del país</p>
      </div>
      <div class="col-sm-4">
        <h3>Revisar propuesta</h3>
        <p>Tambien podras darle
          un seguimiento a tu propuesta
          para poder verificar el estado.</p>
      </div>
    </div>
  </div>
  <br><br><br>


</body>
</html>
