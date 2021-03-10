<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT num_reloj, Contraseña FROM usuarios WHERE num_reloj = :num_emp');
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
        <?php require 'partials/navbar.php'
        ?>  
    </head>
    <body>
      
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['num_reloj']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>


        <h1>Inicia sesión para continuar.</h1>
        <form action="login.php" method="post">
            
            <input type="submit" value="Entrar">
        </form>
        <?php endif; ?>    
    </body>
</html>