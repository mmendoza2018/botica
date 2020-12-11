<!DOCTYPE html>
<html lang="en">
<?php 
require("vistas/componentes/header.html");

?>
<body>
  
<div class="bg">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4 pt-5">
    <!-- Default form login -->
<form class="text-center border border-light p-5 form_fondo" >

<img src="img/logo.jpeg" class="img-fluid" alt="Responsive image">
<hr>

<!-- Email -->
<input type="text" id="usuario" class="form-control mb-4" placeholder="Usuario">

<!-- Password -->
<input type="password" id="pass" class="form-control mb-4" placeholder="Contraseña">



<!-- Sign in button -->
<button class="btn btn-success btn-block my-4" type="button" onclick="enviar()" >ingresar</button>

<!-- Register -->
</form>
<!-- Default form login -->
  </div>
  <div class="col-sm-4"></div>
</div> 
</div>
</div>
<?php require("vistas/componentes/footer.html") ?>

  

</body>
</html>
