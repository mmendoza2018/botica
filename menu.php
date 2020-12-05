<!DOCTYPE html>
<html lang="en">
<?php 
require("vistas/componentes/header.html");
?>
<style>
   .nav-pills .nav-link.active,
.show>.nav-pills .nav-link{
    background: palegreen !important
}
</style>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark success-color lighten-1 p-0 pl-2">
  <a class="navbar-brand" href="#">botica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
   
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" width="40" height="40" class="rounded-circle z-depth-0"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="container-fluid pt-2">
<div class="row">
    <div class="col-sm-1 p-0"></div>
    <div class="col-sm-10 p-0 jumbotron ">
    <ul class="nav nav-pills mb-3  border grey lighten-2" id="pills-tab" role="tablist">
  <li class="nav-item border-right border-success">
    <a class="nav-link active text-dark" id="pills-reportes-tab" data-toggle="pill" href="#pills-reportes" role="tab"
      aria-controls="pills-home" aria-selected="true">Reportes</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-ventas-tab" data-toggle="pill" href="#pills-ventas" role="tab"
      aria-controls="pills-profile" aria-selected="false">Ventas</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab"
      aria-controls="pills-contact" aria-selected="false">Productos</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link  text-dark" id="pills-categorias-tab" data-toggle="pill" href="#pills-categorias" role="tab"
      aria-controls="pills-home" aria-selected="true">Categorias</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-proveedores-tab" data-toggle="pill" href="#pills-proveedores" role="tab"
      aria-controls="pills-profile" aria-selected="false">Proveedores</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-usuarios-tab" data-toggle="pill" href="#pills-usuarios" role="tab"
      aria-controls="pills-contact" aria-selected="false">Usuarios</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-promociones-tab" data-toggle="pill" href="#pills-promociones" role="tab"
      aria-controls="pills-contact" aria-selected="false">Promociones</a>
  </li>
</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-reportes" role="tabpanel" aria-labelledby="pills-reportes-tab">Consequat
    occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat
    velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo
    anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
    minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
    nostrud.</div>
  <div class="tab-pane fade" id="pills-ventas" role="tabpanel" aria-labelledby="pills-ventas-tab">Ad
    pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt
    amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id
    incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis
    deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</div>

    <div class="tab-pane fade" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">Est
    quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
    Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim
    exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
    </div>
   
  <div class="tab-pane fade" id="pills-categorias" role="tabpanel" aria-labelledby="pills-categorias-tab">Ad
    pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt
    amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id
    incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis
    deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</div>
  <div class="tab-pane fade" id="pills-proveedores" role="tabpanel" aria-labelledby="pills-proveedores-tab">Est
    quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
    Nulla ut duis ipsum nisi elit fid deserunt reprehenderit
    </div>
    <div class="tab-pane fade" id="pills-usuarios" role="tabpanel" aria-labelledby="pills-usuarios-tab">Est
    quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
    Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim
    exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
    </div>
    <div class="tab-pane fade" id="pills-promociones" role="tabpanel" aria-labelledby="pills-promociones-tab">Est
    quis nulla laborum officia ad nisi reprehenderit laborum veniam eu veniam. Eiusmod minim
    exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
    </div>
</div>
    </div>
    <div class="col-sm-1 p-0" ></div>
</div>

</div>


<?php 
require("vistas/componentes/footer.html");
?>    
</body>
</html>