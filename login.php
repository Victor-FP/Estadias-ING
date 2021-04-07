<?php

  session_start();

 if (isset($_SESSION['user_id'])) {
    header('Location: /Estadias-ING-main');
  }
  require 'database.php';

  if (!empty($_POST['num_emp']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT Num_reloj, Contraseña FROM usuarios WHERE Num_reloj = :num_emp');
    $records->bindParam(':num_emp', $_POST['num_emp']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    

    if (count($results) > 0 && password_verify($_POST['pass'], $results['Contraseña'])) {
      $_SESSION['user_id'] = $results['Num_reloj'];
      header("Location: index.php");
    } else {
      $message = 'Lo sentimos, no se encontro ese usuario, vuelva a intentar';
    }
    
  }
  
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesion</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <?php require 'partials/navbar.php'
        ?>  
    </head>
    <body style="background-color: #F2F2F2;">

    

        <h1>Inicia sesión para continuar.</h1>
        <img id="camion" src="img/camion.gif" alt="gif" style="height: 10rem;">
        <form action="login.php" method="post">
            <input type="text" name="num_emp" placeholder="Ingrese su numero de Empleado">
            <input type="password" name="pass" placeholder="Ingrese su contraseña">
            <input type="submit" value="Entrar" class="btn btn-warning">
        </form>
        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    </body>
</html>