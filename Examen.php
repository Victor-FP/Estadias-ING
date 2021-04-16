<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Evaluación</title>
    
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: center;
  margin: auto;
  border: 1px solid #888;
  width: 60%;
  bottom: 0;
  background-color: #fefefe;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {

  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {

  padding: 2px 16px;
  background-color: #e3a525;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #e3a525;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
</style>

</head>
<body style="background-color: #F2F2F2; text-align: left; ">
<ul>
    <li><a width="auto" href="http://www.fletes-mexico.com/index.html">
        <img src="/Estadias-ING-main/img/logo.PNG" height="100px" ></a>
        <a href="/Estadias-ING-main/index.php" class="btn btn-warning pl-15">Regresar</a>
    </li>
    <li>
        
    </li>
</ul>


<h1 style="margin-left: 100px;">Certificación OEA Y CTPAT</h1>
    <div id="test" style="margin-left: 100px;"></div>
    <br>
    <center><button id="boton" class="btn btn-warning pt-3">Mostrar resultado</button></center>


    <div id="myModal" class="modal">
    <div class="modal-content">
    <div class="modal-header">
    
    <h2>Resultados</h2>
    <span class="close">&times;</span>
    </div>
    <div class="modal-body">
    <div id="resultado" style="font-size: 30px;"></div>
    </div>
    <div class="modal-footer">
      <a href="/Estadias-ING-main/index.php">Regresar a Cursos</a>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("boton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


    <a id="resultado" style="font-size: 30px;"></a>
    <script src="/Estadias-ING-main/js/ExamenBeta.js"></script>
    <br>
</body>
</html>