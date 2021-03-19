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
      <br> Bienvenido <?= $user['Nombre'],' ', $user['Apellido_Pa'],' ', $user['Apellido_Ma']; ?>
      <br>Estos son los cursos
      <div id="app" class="row">
        <div class="card col-sm-4" v-for="curso of cursos">
          <img src="img/Curso1.PNG" class="card-img-top" alt="Curso 1">
          <div class="card-body">
            <h5 class="card-title">{{curso.nombre}}</h5>
            <p class="card-text">{{curso.desc}}</p>

            <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog modal-lg" role="document" >
		            <div class="modal-content">
		            	<div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	  <span aria-hidden="true">&times;</span>
			            	</button>
				           <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
			           </div>
			            <div class="modal-body">
                    <iframe src="https://drive.google.com/file/d/1LN8FYbZkU5K5kbXJ_VaUVxXriIujHXwa/preview" width="640" height="480"></iframe>
		            	</div>
	            	</div>
            	</div>
            </div>
            
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">Abrir modal</button>
          </div>
        </div>
    </div>
      <a href="logout.php" class="btn btn-warning">
        Cerrar Sesion
      </a>
    <?php else: ?>


        <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post">
            
            <input type="submit" value="Entrar">
        </form>
        <?php endif; ?>  
        <script src="js/cursos.js"></script> 

    </body>
</html>