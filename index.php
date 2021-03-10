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
      

        <h1>Inicia sesión para continuar.</h1>
        <form action="index.php" method="post">
            <input type="text" name="num_emp" placeholder="Ingrese su numero de Empleado">
            <input type="password" name="pass" placeholder="Ingrese su contraseña">
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>