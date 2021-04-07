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
        <title>Capacitaciones</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

        
        <?php require 'partials/navbar.php'
        ?>  
        
    </head>
    <body>
      
    <?php if(!empty($user)): ?>
      <a href="logout.php" class="btn btn-warning" >Cerrar Sesion</a>
      <h4> <center> Bienvenido <?= $user['Nombre'],' ', $user['Apellido_Pa'],' ', $user['Apellido_Ma']; ?></center></h4>
      <br><h2>Estos son los cursos</h2>
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


        <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post">
            
            <input type="submit" value="Entrar">
        </form>
        <?php endif; ?>  
        <script src="js/cursos.js"></script> 

    </body>
</html>