<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <title>Document</title>
 
</head>

<body style="background-color: #F2F2F2;">
<ul>
    <li><a width="auto" href="http://www.fletes-mexico.com/index.html">
        <img src="../img/logo.PNG" height="100px" ></a>
        <a href="../index.php" class="btn btn-warning pl-15">Regresar</a>
    </li>
    <li>
        
    </li>
</ul>
<style>
    .main-container{
    width: 70%;
    margin: auto;
    border: 1px solid yellow;
    padding-top: 40%;
    position: relative;
}
.main-container iframe{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
}
</style>
<?php 
    if (isset($_GET['Blink'])) { 
        $Blink  = $_GET['Blink']; } ?>
        
        <div class="test">
            <div class="main-container">
                <iframe src="<?php echo $Blink; ?>" title="Curso" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture;" allowfullscreen></iframe>
            </div>
            
            <center><a href="/Estadias-ING-main/Examen.php" class="btn btn-warning pt-3" >Tomar examen</a></center>
        </div>
 
</body>
</html>