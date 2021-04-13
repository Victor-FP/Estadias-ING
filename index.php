<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT num_reloj, Contraseña, Nombre, Apellido_Pa, Apellido_Ma FROM usuarios WHERE num_reloj = :num_emp');
    $records->bindParam(':num_emp', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Capacitaciones</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
       

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
        <?php require 'partials/navbar.php'
        ?>  
        <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
    </head>
    <body style="background-color: #F2F2F2;">
      
    <?php if(!empty($user)): ?>
      <a href="logout.php" class="btn btn-warning" style="margin-right: 10px;float: right;" >Cerrar Sesion</a>
      <h4 style="margin-left: 10px; font-size: 25px;">  Bienvenido <?= $user['Nombre'],' ', $user['Apellido_Pa'],' ', $user['Apellido_Ma']; ?></h4>
      <br><h2>Cursos Disponibles:</h2>
      <div id="app" class="row">
        <div class="card-group pb-5">
        <div class="card col-md-3" v-for="curso of cursos1" >
          <img v-bind:src="'/Estadias-ING-main/img/'+ curso.img" class="card-img-top" alt="Curso">
          <div class="card-body">
            <h5 class="card-title">{{curso.nombre}}</h5>
            <p class="card-text">{{curso.desc}}</p>
            <a class="btn btn-warning" v-bind:href="'/Estadias-ING-main/partials/modalbox.php?Blink=/Estadias-ING-main/cursos/'+curso.src">Ver Curso.</a> 
            
          </div>
        </div>
        </div>
        <div class="card-group pb-5">
        <div class="card col-md-3" v-for="curso of cursos2" >
          <img v-bind:src="'/Estadias-ING-main/img/'+ curso.img" class="card-img-top" alt="Curso">
          <div class="card-body">
            <h5 class="card-title">{{curso.nombre}}</h5>
            <p class="card-text">{{curso.desc}}</p>
            <a class="btn btn-warning" v-bind:href="'/Estadias-ING-main/partials/modalbox.php?Blink=/Estadias-ING-main/cursos/'+curso.src">Ver Curso.</a> 
            
          </div>
        </div>
        </div>
        <div class="card-group pb-5">
        <div class="card col-md-3" v-for="curso of cursos3" >
          <img v-bind:src="'/Estadias-ING-main/img/'+ curso.img" class="card-img-top" alt="Curso">
          <div class="card-body">
            <h5 class="card-title">{{curso.nombre}}</h5>
            <p class="card-text">{{curso.desc}}</p>
            <a class="btn btn-warning" v-bind:href="'/Estadias-ING-main/partials/modalbox.php?Blink=/Estadias-ING-main/cursos/'+curso.src">Ver Curso.</a> 
            
          </div>
        </div>
        </div>
        <div class="card-group pb-5 col-3">
        <div class="card" v-for="curso of cursos4" >
          <img v-bind:src="'/Estadias-ING-main/img/'+ curso.img" class="card-img-top" alt="Curso">
          <div class="card-body">
            <h5 class="card-title">{{curso.nombre}}</h5>
            <p class="card-text">{{curso.desc}}</p>
            <a class="btn btn-warning" v-bind:href="'/Estadias-ING-main/partials/modalbox.php?Blink=/Estadias-ING-main/cursos/'+curso.src">Ver Curso.</a> 
            
          </div>
        </div>
        </div>
    </div>
      
    <?php else: ?>

      
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators" style="background-color: transparent;">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/hero_1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption" style="margin-bottom: 100px;">
      <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post" >
            
            <input type="submit" value="Entrar" class="btn btn-warning">
        </form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/hero_2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption" style="margin-bottom: 100px;">
      <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post" >
            
            <input type="submit" value="Entrar" class="btn btn-warning">
        </form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/hero_3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption" style="margin-bottom: 100px;">
      <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post" >
            
            <input type="submit" value="Entrar" class="btn btn-warning">
        </form>
      </div>   
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        
        <?php endif; ?>  
        <script src="js/cursos.js"></script> 

    </body>
</html>